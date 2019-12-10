<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login');
	}

	public function masuk(){
   	$nip = $this->input->post('nip');
    $password = $this->input->post('password');
    if($data = $this->db->select('*')->from('tbl_guru')->where('nip',$nip)->limit(1)->get()->result()){
    	foreach ($data as $use) {
    	if($use->password == $password){
    		// echo "berhasil";
        $sess_array = array (
                'nip' =>$nip ,
                'nama' => $use->nama,
                'jabatan' => $use->jabatan,
            );
        $this->session->set_userdata('user',$sess_array);
        echo "<script>alert('Anda berhasil login');
        	window.location.href='".base_url()."Admin';</script>";  
    	}else{
    		echo "<script>alert('Anda gagal login, silahkan coba lagi');
        	window.location.href='".base_url()."Login';</script>";
    	}
    	}
	}else{
		echo "<script>alert('Anda gagal login, silahkan coba lagi');
        	window.location.href='".base_url()."Login';</script>";
	}
    
   }

   public function Keluar(){
        $this->session->unset_userdata('user');
        redirect('Login');
   }
}
