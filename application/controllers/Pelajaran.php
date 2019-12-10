<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public function index()
	{
		$data['pelajaran'] = $this->db->get('tbl_matapelajaran')->result();
		$data['kelas'] = $this->db->get('tbl_kelas')->result();
		$this->load->view('Header');
		$this->load->view('Pelajaran',$data);
		$this->load->view('Footer');
	}
	public function pelajaranSimpan()
	{
	    $kondisi = 0;
	    $pelajaran = $this->db->query("select * from tbl_matapelajaran where nama_matpel = '".$this->input->post('nama_matpel')."' and kode_kelas = '".$this->input->post('kode_kelas')."' ;")->result();
	    foreach ($pelajaran as $mpl) {
	    $kondisi++;
	    }
	    if($kondisi == 0){
	        $data = array(
				'kode_matpel' => chr(rand(65,90)).rand(10,100).rand(100,10000).chr(rand(65,90)),
				'nama_matpel' => $this->input->post('nama_matpel'),
				'kode_kelas' => $this->input->post('kode_kelas'),
                
				
			);
		if($this->db->insert('tbl_matapelajaran', $data)){
			redirect('pelajaran');
		}
	    }else{
	        echo "<script>alert('Data sudah ada silahkan periksa kembali');
        	window.location.href='".base_url()."Pelajaran';</script>";
	    }
	    
	}

	public function Hapus_pelajaran($id)
	{
		if($this->db->delete('tbl_matapelajaran',array('kode_matpel'=>$id))){
						redirect('pelajaran'); 
	    }
	}

	public function pelajaranUbah()
	{
		$data = array(
				'nama_matpel' => $this->input->post('nama_matpel'),
				'kode_kelas' => $this->input->post('kode_kelas'),
			);
		if($this->db->update('tbl_matapelajaran', $data, array('kode_matpel' => $this->input->post('kode_matpel')))){
            redirect('pelajaran'); 
         }
	}

	
	

}
