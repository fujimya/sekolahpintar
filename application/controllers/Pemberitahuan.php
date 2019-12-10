<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemberitahuan extends CI_Controller {

	public function index()
	{
	    $kode_kelas = "";
		$user = $this->session->userdata('user');
		$kelas = $this->db->query("SELECT * FROM tbl_kelas WHERE nip = '".$user['nip']."';")->result();
		foreach ($kelas as $spl) {
		    $kode_kelas = $spl->kode_kelas;
		}
		$data['anggota_kelas'] = $this->db->query("SELECT * FROM tbl_kelas_anggota WHERE kode_kelas = '".$kode_kelas."';")->result();
	    $data['pemberitahuan'] = $this->db->query("SELECT tbl_pemberitahuan.id,tbl_pemberitahuan.tunggakan,tbl_pemberitahuan.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_pemberitahuan.tanggal,tbl_pemberitahuan.status_sms,tbl_pemberitahuan.pesan FROM `tbl_pemberitahuan` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_pemberitahuan.nis = tbl_siswa.nis) ")->result();
	    $data['siswa'] = $this->db->get('tbl_siswa')->result();
		$this->load->view('Header');
		$this->load->view('Pemberitahuan',$data);
		$this->load->view('Footer');
	}
	
		public function kepala()
	{
	    $kode_kelas = "";
		$user = $this->session->userdata('user');
		$kelas = $this->db->query("SELECT * FROM tbl_kelas WHERE nip = '".$user['nip']."';")->result();
		foreach ($kelas as $spl) {
		    $kode_kelas = $spl->kode_kelas;
		}
		$data['anggota_kelas'] = $this->db->query("SELECT * FROM tbl_kelas_anggota WHERE kode_kelas = '".$kode_kelas."';")->result();
	    $data['pemberitahuan'] = $this->db->query("SELECT tbl_pemberitahuan.id,tbl_pemberitahuan.tunggakan,tbl_pemberitahuan.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_pemberitahuan.tanggal,tbl_pemberitahuan.status_sms FROM `tbl_pemberitahuan` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_pemberitahuan.nis = tbl_siswa.nis) ")->result();
	    $data['siswa'] = $this->db->get('tbl_siswa')->result();
		$this->load->view('Header');
		$this->load->view('Pemberitahuan_kepala',$data);
		$this->load->view('Footer');
	}
		public function pemberitahuanSimpan()
	{
		$data = array(
		        'nis'     => $this->input->post('nis'),
				'tanggal' => date_format(date_create($this->input->post('tanggal')),"Y-m-d"),
				'tunggakan'     => $this->input->post('tunggakan'),
				'pesan'     => $this->input->post('pesan'),
			);
		if($this->db->insert('tbl_pemberitahuan', $data)){
			redirect('Pemberitahuan');
		}
	}
	
	public function Hapus_Pemberitahuan($id)
	{
		if($this->db->delete('tbl_pemberitahuan',array('id'=>$id))){
						redirect('Pemberitahuan'); 
	    }
	}
	
	public function API(){
	    $array = array();
	    $data = $this->db->query("SELECT tbl_pemberitahuan.id,tbl_pemberitahuan.nis,tbl_pemberitahuan.tunggakan,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_pemberitahuan.tanggal,tbl_pemberitahuan.status_sms,tbl_pemberitahuan.pesan FROM `tbl_pemberitahuan` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_pemberitahuan.nis = tbl_siswa.nis) where status_sms = 0 ")->result();
	    foreach ($data as $dt) {
	        if($dt->pesan == "-"){
	        array_push($array,array(
	             'id' => $dt->id,
				 'nis' => $dt->nis,
				 'nama_siswa' => $dt->nama_siswa,
				 'nope_ortu' => $dt->nope_ortu,
				 'pesan' => 'Diberitahukan kepada wali murid atas nama '.$dt->nama_siswa.', pada tanggal '.date('d-m-Y', strtotime('-1 day', strtotime($dt->tanggal ))).' waktu pembayaran, Tunggakan : '.$dt->tunggakan
				));
	        }else{
	            array_push($array,array(
	             'id' => $dt->id,
				 'nis' => $dt->nis,
				 'nama_siswa' => $dt->nama_siswa,
				 'nope_ortu' => $dt->nope_ortu,
				 'pesan' => $dt->pesan
				));
	        }
	    }
	    echo json_encode(array('pemberitahu'=>$array));
	}
	
	public function Update($id){
	    $data = array(
				'status_sms' => '1',
			);
		if($this->db->update('tbl_pemberitahuan', $data, array('id' => $id))){
           
         }
	}

}
