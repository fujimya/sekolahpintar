<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function index()
	{
	    $this->db->query("Delete from tbl_chace_nilai where status_nilai = 1 ;");
	    $kode_kelas = "";
		$user = $this->session->userdata('user');
		$kelas = $this->db->query("SELECT * FROM tbl_kelas WHERE nip = '".$user['nip']."';")->result();
		foreach ($kelas as $spl) {
		    $kode_kelas = $spl->kode_kelas;
		}
		$data['pelajaran'] = $this->db->query("SELECT * FROM tbl_matapelajaran WHERE kode_kelas = '".$kode_kelas."';")->result();
		$data['guru'] = $this->db->get('tbl_guru')->result();
		$this->load->view('Header');
		$this->load->view('Nilai',$data);
		$this->load->view('Footer');
	}
	public function addNilai($kode_kelas,$kode_matpel){
	    date_default_timezone_set("Asia/Bangkok");
	    $data_siswa = $this->db->query("SELECT * FROM tbl_kelas_anggota WHERE kode_kelas = '".$kode_kelas."';")->result();
	    foreach ($data_siswa as $da) {
	        $data = array(
				'kode_kelas' => $da->kode_kelas,
				'kode_matpel' => $kode_matpel,
				'nis' => $da->nis,
			);
			
			$data_chace = $this->db->query("SELECT * FROM tbl_chace_nilai WHERE kode_kelas = '".$kode_kelas."' and nis = '".$da->nis."';");
			if($data_chace->num_rows() <= 0){
			    $this->db->insert('tbl_chace_nilai', $data);
			}else{
			 //   echo 'Data sudah ada';
			}
			
	    }
	    $data['kode_kelas'] = $kode_kelas;
	    $data['nilai'] = $this->db->query("SELECT * FROM tbl_chace_nilai WHERE kode_kelas = '".$kode_kelas."' and status_nilai = 0 ;")->result();
	    $data['nilai_'] = $this->db->query("SELECT * FROM tbl_nilai WHERE kode_matpel = '".$kode_matpel."' and tanggal >= '".date("Y-m-d")."' ;")->result();
	    $data['siswa'] = $this->db->get('tbl_siswa')->result();
	    
	    $this->load->view('Header');
		$this->load->view('NilaiLanjut',$data);
		$this->load->view('Footer');
	}
	public function saveNilai(){
	    $data = array(
				'kode_matpel' => $this->input->post('kode_matpel'),
				'kode_kelas' => $this->input->post('kode_kelas'),
				'nis' => $this->input->post('nis'),
				'nilai' => $this->input->post('nilai'),
				'salah' => $this->input->post('salah'),
				'keterangan' => $this->input->post('keterangan'),
			);
			
		$this->db->insert('tbl_nilai', $data);
		//$this->db->insert('tbl_absen_chace', $data);
		
		
		$this->db->query("Update tbl_chace_nilai SET status_nilai = 1 where kode_kelas = '".$this->input->post('kode_kelas')."' and nis = '".$this->input->post('nis')."'");
		
		redirect("Nilai/addNilai/".$this->input->post('kode_kelas')."/".$this->input->post('kode_matpel'));
	}
	
	public function cetakNilai($kode_kelas,$kode_matpel){
	    date_default_timezone_set("Asia/Bangkok");
	    $data['siswa'] = $this->db->get('tbl_siswa')->result();
	    $data['nilai_'] = $this->db->query("SELECT * FROM tbl_nilai WHERE kode_matpel = '".$kode_matpel."' and tanggal >= '".date("Y-m-d")."' ;")->result();
	    $data['kelas'] = $this->db->query("SELECT * FROM tbl_kelas WHERE kode_kelas = '".$kode_kelas."' ;")->result();
	    $data['matpel'] = $this->db->query("SELECT * FROM tbl_matapelajaran WHERE kode_matpel = '".$kode_matpel."' ;")->result();
	    $this->load->view('cetakNilai',$data);
	}
	
	public function API(){
	    $array = array();
	    $data = $this->db->query("SELECT tbl_nilai.kode_nilai,tbl_nilai.salah,tbl_nilai.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_nilai.kode_matpel,tbl_matapelajaran.nama_matpel,tbl_matapelajaran.kode_kelas,tbl_kelas.nama_kelas,tbl_nilai.nilai,tbl_nilai.keterangan,tbl_nilai.tanggal,tbl_nilai.status_sms FROM `tbl_nilai` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_nilai.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_matapelajaran on(tbl_nilai.kode_matpel = tbl_matapelajaran.kode_matpel) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_kelas.kode_kelas = tbl_nilai.kode_kelas) where status_sms = 0")->result();
	    foreach ($data as $dt) {
	        array_push($array,array(
				 'kode_nilai' => $dt->kode_nilai,
				 'nis' => $dt->nis,
				 'nama_siswa' => $dt->nama_siswa,
				 'nope_ortu' => $dt->nope_ortu,
				 'kode_kelas' => $dt->kode_kelas,
				 'nama_kelas' => $dt->nama_kelas,
				 'kode_matpel' => $dt->kode_matpel,
				 'nama_matpel' => $dt->nama_matpel,
				 'pesan' => 'kepada '.$dt->nama_siswa.', walikelas : '.$dt->nama_kelas.', tanggal :'.date('d-m-Y', strtotime('-1 day', strtotime($dt->tanggal ))).' mata pelajaran :'.$dt->nama_matpel.', '.$dt->keterangan.', Nilai: '.$dt->nilai.' Salah : '.$dt->salah	
				));
	    }
	    echo json_encode(array('nilai'=>$array));
	}
	
	public function Update($id){
	    $data = array(
				'status_sms' => '1',
			);
		if($this->db->update('tbl_nilai', $data, array('kode_nilai' => $id))){
           
         }
	}
}
