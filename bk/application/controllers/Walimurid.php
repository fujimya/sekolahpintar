<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walimurid extends CI_Controller {

	public function index()
	{
			$data['siswa'] = $this->db->query('SELECT
			tbl_siswa_melanggar.id
		    ,tbl_siswa_melanggar.nis
		    , tbl_siswa.nama_siswa
		    , tbl_siswa_melanggar.kode_pelanggaran
		    , tbl_kategori.kategori
		    , tbl_pelanggaran.isi
		    , tbl_pelanggaran.poin
		FROM
		    tbl_siswa
		    INNER JOIN tbl_siswa_melanggar 
		        ON (tbl_siswa.nis = tbl_siswa_melanggar.nis)
		    INNER JOIN tbl_pelanggaran 
		        ON (tbl_pelanggaran.id = tbl_siswa_melanggar.kode_pelanggaran)
		    INNER JOIN tbl_kategori 
		        ON (tbl_kategori.id = tbl_pelanggaran.kategori);')->result();
		$data['murid'] = $this->db->get('tbl_siswa')->result();
		$data['kategori'] = $this->db->query("SELECT
		    tbl_pelanggaran.id
		    , tbl_kategori.kategori
		    , tbl_pelanggaran.isi
		    , tbl_pelanggaran.poin
		FROM
		    tbl_pelanggaran
		    INNER JOIN tbl_kategori 
		        ON (tbl_pelanggaran.kategori = tbl_kategori.id);")->result();
		$this->load->view('Walimurid',$data);
	}
}
