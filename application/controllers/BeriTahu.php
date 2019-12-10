<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeriTahu extends CI_Controller {

	public function index()
	{
		$this->db->query("Delete from tbl_chace_beritahu where status_beritahu = 1 ;");
	    $user = $this->session->userdata('user');
		$data['kelas'] = $this->db->query("SELECT * FROM tbl_kelas WHERE nip = '".$user['nip']."';")->result();
		$data['guru'] = $this->db->get('tbl_guru')->result();
		$this->load->view('Header');
		$this->load->view('BeriTahu',$data);
		$this->load->view('Footer');
	}
}
