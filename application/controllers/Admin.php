<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Utama');
		$this->load->view('Footer');

	}


	public function User()
	{
		$data['user'] = $this->db->query("select * from tbl_guru where jabatan = 'admin' or jabatan = 'kepala';")->result();
		$this->load->view('Header');
		$this->load->view('User',$data);
		$this->load->view('Footer');

	}
	public function Guru()
	{
		$data['user'] = $this->db->query("select * from tbl_guru where jabatan = 'guru';")->result();
		$this->load->view('Header');
		$this->load->view('User',$data);
		$this->load->view('Footer');

	}

	public function UserSimpan()
	{
		$data = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'jabatan' => $this->input->post('jabatan'),
				'nope' => $this->input->post('nope'),
				'alamat' => $this->input->post('alamat'),
                'password' => $this->input->post('password'),
                
				
			);
		if($this->db->insert('tbl_guru', $data)){
			redirect('Admin/User');
		}
	}

	public function Hapus_User($nip)
	{
		if($this->db->delete('tbl_guru',array('nip'=>$nip))){
						redirect('Admin/User'); 
	    }
	}

	public function UserUbah()
	{
		$data = array(
				'nama' => $this->input->post('nama'),
				'jabatan' => $this->input->post('jabatan'),
				'nope' => $this->input->post('nope'),
				'alamat' => $this->input->post('alamat'),
                'password' => $this->input->post('password'),
			);
		if($this->db->update('tbl_guru', $data, array('nip' => $this->input->post('nip')))){
            redirect('Admin/User'); 
         }
	}

}
