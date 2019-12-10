<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function index()
	{
		$data['kelas'] = $this->db->get('tbl_kelas')->result();
		$data['guru'] = $this->db->get('tbl_guru')->result();
		$this->load->view('Header');
		$this->load->view('Kelas',$data);
		$this->load->view('Footer');
	}
	public function kelasSimpan()
	{
		$data = array(
				'kode_kelas' => chr(rand(65,90)).rand(10,100).rand(100,10000).chr(rand(65,90)),
				'nama_kelas' => $this->input->post('nama_kelas'),
				'nip' => $this->input->post('nip'),
                
				
			);
		if($this->db->insert('tbl_kelas', $data)){
			redirect('kelas');
		}
	}

	public function Hapus_kelas($id)
	{
		if($this->db->delete('tbl_kelas',array('kode_kelas'=>$id))){
						redirect('kelas'); 
	    }
	}

	public function kelasUbah()
	{
		$data = array(
				'nama_kelas' => $this->input->post('nama_kelas'),
				'nip' => $this->input->post('nip'),
			);
		if($this->db->update('tbl_kelas', $data, array('kode_kelas' => $this->input->post('kode_kelas')))){
            redirect('kelas'); 
         }
	}
	
	public function Detail($kode_kelas){
	    $data['kelas_anggota'] = $this->db->query("select * from tbl_kelas_anggota where kode_kelas = '".$kode_kelas."';")->result();
		$data['kelas'] = $this->db->get('tbl_kelas')->result();
		$data['siswa'] = $this->db->get('tbl_siswa')->result();
		$data['kode_kelas'] = $kode_kelas;
		$this->load->view('Header');
		$this->load->view('DetailKelas',$data);
		$this->load->view('Footer');
	}
	
	
	public function anggotakelasSimpan()
	{
		$data = array(
				'kode_kelas' => $this->input->post('kode_kelas'),
				'nis' => $this->input->post('nis'),
                
				
			);
		if($this->db->insert('tbl_kelas_anggota', $data)){
			redirect('Kelas/Detail/'.$this->input->post('kode_kelas'));
		}
	}
	public function Hapus_anggotakelas($id,$kode)
	{
		if($this->db->delete('tbl_kelas_anggota',array('nis'=>$id))){
			redirect('Kelas/Detail/'.$kode); 
	    }
	}
}
