<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$data['siswa'] = $this->db->get('tbl_siswa')->result();
		$this->load->view('Header');
		$this->load->view('Siswa',$data);
		$this->load->view('Footer');

	}

	public function siswaSimpan()
	{
		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => date_format(date_create($this->input->post('tanggal_lahir')),"Y-m-d"),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'nope_ortu' => $this->input->post('nope_ortu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
			);
		if($this->db->insert('tbl_siswa', $data)){
			redirect('Siswa');
		}
	}

	public function Hapus_siswa($nis)
	{
		if($this->db->delete('tbl_siswa',array('nis'=>$nis))){
						redirect('siswa'); 
	    }
	}

	public function siswaUbah()
	{
		$data = array(
				'nama_siswa' => $this->input->post('nama_siswa'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => date_format(date_create($this->input->post('tanggal_lahir')),"Y-m-d"),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'nope_ortu' => $this->input->post('nope_ortu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
			);
		if($this->db->update('tbl_siswa', $data, array('nis' => $this->input->post('nis')))){
            redirect('siswa'); 
         }
	}

}
