<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function index()
	{
	    $this->db->query("Delete from tbl_chace_absen where status_absen = 1 ;");
	    $user = $this->session->userdata('user');
		$data['kelas'] = $this->db->query("SELECT * FROM tbl_kelas WHERE nip = '".$user['nip']."';")->result();
		$data['guru'] = $this->db->get('tbl_guru')->result();
		$this->load->view('Header');
		$this->load->view('Absen',$data);
		$this->load->view('Footer');
	}
	
	public function addAbsen($kode_kelas){
	    date_default_timezone_set("Asia/Bangkok");
	    $data_siswa = $this->db->query("SELECT * FROM tbl_kelas_anggota WHERE kode_kelas = '".$kode_kelas."';")->result();
	    foreach ($data_siswa as $da) {
	        $data = array(
				'kode_kelas' => $da->kode_kelas,
				'nis' => $da->nis,
			);
			
			$data_chace = $this->db->query("SELECT * FROM tbl_chace_absen WHERE kode_kelas = '".$kode_kelas."' and nis = '".$da->nis."';");
			if($data_chace->num_rows() <= 0){
			    $this->db->insert('tbl_chace_absen', $data);
			}else{
			 //   echo 'Data sudah ada';
			}
			
	    }
	    $data['kode_kelas'] = $kode_kelas;
	    $data['absen'] = $this->db->query("SELECT * FROM tbl_chace_absen WHERE kode_kelas = '".$kode_kelas."' and status_absen = 0 ;")->result();
	    $data['absen_'] = $this->db->query("SELECT * FROM tbl_absen WHERE kode_kelas = '".$kode_kelas."' and tanggal >= '".date("Y-m-d")."' ;")->result();
	    $data['siswa'] = $this->db->get('tbl_siswa')->result();
	    
	    $this->load->view('Header');
		$this->load->view('AbsenLanjut',$data);
		$this->load->view('Footer');
	}
	
	public function hapus_chace($kode_kelas){
	    $this->db->query("Delete from tbl_chace_absen where kode_kelas = '".$kode_kelas."' and status_absen = 1 ;");
	}
	
	public function saveAbsen($kode_kelas,$nis,$ket){
	    $data = array(
				'kode_kelas' => $kode_kelas,
				'nis' => $nis,
				'keterangan' => $ket
			);
			
		$this->db->insert('tbl_absen', $data);
		//$this->db->insert('tbl_absen_chace', $data);
		
		
		$this->db->query("Update tbl_chace_absen SET status_absen = 1 where kode_kelas = '".$kode_kelas."' and nis = '".$nis."'");
		
		redirect("Absensi/addAbsen/".$kode_kelas);
	}
	
	public function cetakAbsen($kode_kelas){
	    date_default_timezone_set("Asia/Bangkok");
	    $data['siswa'] = $this->db->get('tbl_siswa')->result();
	    $data['absen_'] = $this->db->query("SELECT * FROM tbl_absen WHERE kode_kelas = '".$kode_kelas."' and tanggal >= '".date("Y-m-d")."' ;")->result();
	    $data['kelas'] = $this->db->query("SELECT * FROM tbl_kelas WHERE kode_kelas = '".$kode_kelas."' ;")->result();
	    $this->load->view('cetakAbsen',$data);
	}
	
	public function API(){
	    $array = array();
	    $data = $this->db->query("SELECT tbl_absen.kode_absen,tbl_absen.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_absen.kode_kelas,tbl_kelas.nama_kelas,tbl_absen.keterangan,tbl_absen.tanggal,tbl_absen.status_sms FROM sekola34_db_sekolah.tbl_absen INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_absen.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_absen.kode_kelas = tbl_kelas.kode_kelas) where status_sms = 0 and keterangan != 'hadir'")->result();
	    foreach ($data as $dt) {
	        array_push($array,array(
				 'kode_absen' => $dt->kode_absen,
				 'nis' => $dt->nis,
				 'nama_siswa' => $dt->nama_siswa,
				 'nope_ortu' => $dt->nope_ortu,
				 'kode_kelas' => $dt->kode_kelas,
				 'nama_kelas' => $dt->nama_kelas,
				 'pesan' => 'Diberitahukan kepada wali murid atas nama '.$dt->nama_siswa.', kelas '.$dt->nama_kelas.', pada tanggal '.date('d-m-Y', strtotime('-1 day', strtotime($dt->tanggal ))).', bahwasannya absen siswa tersebut berstatus '.$dt->keterangan	
				));
	    }
	    echo json_encode(array('absen'=>$array));
	}
	
	public function Update($id){
	    $data = array(
				'status_sms' => '1',
			);
		if($this->db->update('tbl_absen', $data, array('kode_absen' => $id))){
           
         }
	}
	
	public function Laporan(){
	    $user = $this->session->userdata('user');
	    $data['laporan'] = $this->db->query("SELECT
    tbl_absen.kode_absen
    , tbl_absen.tanggal
    , tbl_absen.nis
    , tbl_siswa.nama_siswa
    , tbl_siswa.jenis_kelamin
    , tbl_siswa.alamat_siswa
    , tbl_siswa.nama_ortu
    , tbl_absen.keterangan
    , tbl_absen.kode_kelas
    , tbl_kelas.nama_kelas
    , tbl_kelas.nip
FROM
    tbl_absen
    INNER JOIN tbl_siswa 
        ON (tbl_absen.nis = tbl_siswa.nis)
   INNER JOIN  tbl_kelas 
        ON (tbl_absen.kode_kelas = tbl_kelas.kode_kelas) where tbl_kelas.nip = '".$user['nip']."'")->result();
    $this->load->view('Header');
	$this->load->view('AbsenLap',$data);
	$this->load->view('Footer');
        
	}
	
	public function filter(){
	     $user = $this->session->userdata('user');
	    $data['laporan'] = $this->db->query("SELECT
    tbl_absen.kode_absen
    , tbl_absen.tanggal
    , tbl_absen.nis
    , tbl_siswa.nama_siswa
    , tbl_siswa.jenis_kelamin
    , tbl_siswa.alamat_siswa
    , tbl_siswa.nama_ortu
    , tbl_absen.keterangan
    , tbl_absen.kode_kelas
    , tbl_kelas.nama_kelas
    , tbl_kelas.nip
FROM
    tbl_absen
    INNER JOIN tbl_siswa 
        ON (tbl_absen.nis = tbl_siswa.nis)
   INNER JOIN  tbl_kelas 
        ON (tbl_absen.kode_kelas = tbl_kelas.kode_kelas) where tbl_kelas.nip = '".$user['nip']."'")->result();
        
	    echo date('Y-m-d', strtotime('+1 day', strtotime($this->input->post('min') ))) ;
	    echo "<br>";
	    echo date('Y-m-d', strtotime('+1 day', strtotime($this->input->post('max') )));
	}
}
