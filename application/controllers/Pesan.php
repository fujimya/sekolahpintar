<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
    
	public function index()
	{
		$data['absen'] = $this->db->query("SELECT tbl_absen.kode_absen,tbl_absen.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_absen.kode_kelas,tbl_kelas.nama_kelas,tbl_absen.keterangan,tbl_absen.tanggal,tbl_absen.status_sms FROM sekola34_db_sekolah.tbl_absen INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_absen.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_absen.kode_kelas = tbl_kelas.kode_kelas) where status_sms = 1")->result();
	    $data['pemberitahuan'] = $this->db->query("SELECT tbl_pemberitahuan.id,tbl_pemberitahuan.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_pemberitahuan.tanggal,tbl_pemberitahuan.status_sms FROM `tbl_pemberitahuan` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_pemberitahuan.nis = tbl_siswa.nis) where status_sms = 1 ")->result();
	    $data['nilai'] = $this->db->query("SELECT tbl_nilai.kode_nilai,tbl_nilai.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_nilai.kode_matpel,tbl_matapelajaran.nama_matpel,tbl_matapelajaran.kode_kelas,tbl_kelas.nama_kelas,tbl_nilai.nilai,tbl_nilai.keterangan,tbl_nilai.tanggal,tbl_nilai.status_sms FROM `tbl_nilai` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_nilai.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_matapelajaran on(tbl_nilai.kode_matpel = tbl_matapelajaran.kode_matpel) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_kelas.kode_kelas = tbl_nilai.kode_kelas) where status_sms = 0")->result();
	   
	    $this->load->view('Header');
		$this->load->view('Pesan',$data);
		$this->load->view('Footer');
	}
	
	public function filter(){
	    $data['absen'] = $this->db->query("SELECT tbl_absen.kode_absen,tbl_absen.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_absen.kode_kelas,tbl_kelas.nama_kelas,tbl_absen.keterangan,tbl_absen.tanggal,tbl_absen.status_sms FROM sekola34_db_sekolah.tbl_absen INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_absen.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_absen.kode_kelas = tbl_kelas.kode_kelas) where status_sms = 1 ")->result();
	    $data['pemberitahuan'] = $this->db->query("SELECT tbl_pemberitahuan.id,tbl_pemberitahuan.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_pemberitahuan.tanggal,tbl_pemberitahuan.status_sms FROM `tbl_pemberitahuan` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_pemberitahuan.nis = tbl_siswa.nis) where status_sms = 1 ")->result();
	    $data['nilai'] = $this->db->query("SELECT tbl_nilai.kode_nilai,tbl_nilai.nis,tbl_siswa.nama_siswa,tbl_siswa.nope_ortu,tbl_nilai.kode_matpel,tbl_matapelajaran.nama_matpel,tbl_matapelajaran.kode_kelas,tbl_kelas.nama_kelas,tbl_nilai.nilai,tbl_nilai.keterangan,tbl_nilai.tanggal,tbl_nilai.status_sms FROM `tbl_nilai` INNER JOIN sekola34_db_sekolah.tbl_siswa on(tbl_nilai.nis = tbl_siswa.nis) INNER JOIN sekola34_db_sekolah.tbl_matapelajaran on(tbl_nilai.kode_matpel = tbl_matapelajaran.kode_matpel) INNER JOIN sekola34_db_sekolah.tbl_kelas on(tbl_kelas.kode_kelas = tbl_nilai.kode_kelas) where status_sms = 0 ")->result();
	    $data['tanggal'] = $this->input->post('tanggal_lahir');
	   
	    $this->load->view('Header');
		$this->load->view('pesan_filter',$data);
		$this->load->view('Footer');

        // print_r(date_format(date_create($this->input->post('tanggal_lahir')),"Y-m-d"));
	}
}
