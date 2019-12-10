<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala extends CI_Controller {


	public function index()
	{
	 echo '';
	 // 	    $data['absen'] = $this->db->query("SELECT tbl_absen.kode_absen,tbl_absen.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_absen.kode_kelas,tbl_kelas.nama_kelas,tbl_absen.keterangan,tbl_absen.tanggal,tbl_absen.status_sms FROM sekola34_db_sekolah.tbl_absen INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_absen.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_absen.kode_kelas = tbl_kelas.kode_kelas) ")->result();
// 	    $this->load->view('Header');
// 		$this->load->view('AbsenKepala',$data);
// 		$this->load->view('Footer');
	}
	
	public function index2(){
	    $this->load->view('welcome_message');
	}
}
