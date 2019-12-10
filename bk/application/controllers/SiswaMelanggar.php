<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaMelanggar extends CI_Controller {

	public function index()
	{
		$data['siswa'] = $this->db->query('SELECT
			tbl_siswa_melanggar.id
			,tbl_siswa_melanggar.tanggal
			,tbl_siswa_melanggar.kelas
			,tbl_siswa_melanggar.jurusan
		    ,tbl_siswa_melanggar.nis
		    , tbl_siswa.nama_siswa
		    , tbl_siswa.jenis_kelamin
		    , tbl_siswa_melanggar.kode_pelanggaran
		    , tbl_kategori.kategori
		    , tbl_pelanggaran.isi
		    , tbl_pelanggaran.poin
		    , tbl_siswa_melanggar.status
		FROM
		    tbl_siswa
		    INNER JOIN tbl_siswa_melanggar 
		        ON (tbl_siswa.nis = tbl_siswa_melanggar.nis)
		    INNER JOIN tbl_pelanggaran 
		        ON (tbl_pelanggaran.id = tbl_siswa_melanggar.kode_pelanggaran)
		    INNER JOIN tbl_kategori 
		        ON (tbl_kategori.id = tbl_pelanggaran.kategori) ORDER BY tbl_siswa_melanggar.tanggal DESC;')->result();
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
		$this->load->view('Header');
		$this->load->view('SiswaPelanggar',$data);
		$this->load->view('Footer');
	}

	public function melanggarSimpan(){
		$data = array(
				'tanggal' => date_format(date_create($this->input->post('tanggal')),"Y-m-d"),
				// 'jurusan' => $this->input->post('jurusan'),
				'kelas' => $this->input->post('kelas'),
				'nis' => $this->input->post('siswa'),
				'kode_pelanggaran' => $this->input->post('kategori'),
				
			);
		if($this->db->insert('tbl_siswa_melanggar', $data)){
			redirect('SiswaMelanggar');
		}
	}

	public function Hapus_Pelanggaran($id){
	    $data = array(
				'status' => '0',
			);
		if($this->db->update('tbl_siswa_melanggar', $data,array('id'=>$id))){
            redirect('SiswaMelanggar');  
         }
	}
	
	public function Hapus_Pelanggaran_permanen($id){
	    if($this->db->delete('tbl_siswa_melanggar',array('id'=>$id))){
						redirect('SiswaMelanggar'); 
	    }
	}
}
