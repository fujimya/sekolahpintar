<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggaran extends CI_Controller {

	
	public function index()
	{
		$data['kategori'] = $this->db->get('tbl_kategori')->result();
		$data['pelanggaran'] = $this->db->get('tbl_pelanggaran')->result();
		$this->load->view('Header');
		$this->load->view('Pelanggaran',$data);
		$this->load->view('Footer');
	}
	public function pelanggaranSimpan(){
		$data = array(
				'kategori' => $this->input->post('kategori'),
				'isi' => $this->input->post('isi'),
				'poin' => $this->input->post('poin'),
				
			);
		if($this->db->insert('tbl_pelanggaran', $data)){
			redirect('Pelanggaran');
		}
	}

	

	public function pelanggaranUbah(){
		$data = array(
				'kategori' => $this->input->post('kategori'),
				'isi' => $this->input->post('isi'),
				'poin' => $this->input->post('poin'),
				
			);
		if($this->db->update('tbl_pelanggaran', $data, array('id' => $this->input->post('id')))){
            redirect('Pelanggaran'); 
         }
	}

	public function Hapus_Pelanggaran($id)
	{
		if($this->db->delete('tbl_pelanggaran',array('id'=>$id))){
						redirect('Pelanggaran'); 
	    }
	}

	public function Ajukan()
	{
		$user = $this->session->userdata('user');
		$data['kategori'] = $this->db->get('tbl_kategori')->result();
		$data['pelanggaran'] = $this->db->query('select * from tbl_ajukan where nip = '.$user['nip'])->result();
		$this->load->view('Header');
		$this->load->view('Pelanggaran',$data);
		$this->load->view('Footer');
	}

	public function ajukanSimpan(){
		$user = $this->session->userdata('user');
		$data = array(
				'kategori' => $this->input->post('kategori'),
				'isi' => $this->input->post('isi'),
				'poin' => $this->input->post('poin'),
				'nip' => $user['nip'],
				
			);
		if($this->db->insert('tbl_ajukan', $data)){
			redirect('Pelanggaran/Ajukan');
		}
	}

	public function ajukanUbah(){
		$data = array(
				'kategori' => $this->input->post('kategori'),
				'isi' => $this->input->post('isi'),
				'poin' => $this->input->post('poin'),
				
			);
		if($this->db->update('tbl_ajukan', $data, array('id' => $this->input->post('id')))){
            redirect('Pelanggaran/Ajukan'); 
         }
	}

	public function Masuk()
	{
		$data['kategori'] = $this->db->get('tbl_kategori')->result();
		$data['pelanggaran'] = $this->db->get('tbl_ajukan')->result();
		$this->load->view('Header');
		$this->load->view('Pelanggaran_Masuk',$data);
		$this->load->view('Footer');
	}

	public function Tolak_Pelanggaran($id){
		$this->db->delete('tbl_ajukan',array('id'=>$id));
		redirect('Pelanggaran/Masuk'); 
		// $data = array(
		// 		'Status' => '1',
				
		// 	);
		// if($this->db->update('tbl_ajukan', $data, array('id' => $id))){

  //           redirect('Pelanggaran/Masuk'); 
  //        }
	}

	public function Terima_Pelanggaran($id){
		$data_aju = $this->db->query('select * from tbl_ajukan where id = '.$id)->result();
		$kategori = $this->db->get('tbl_kategori')->result();
		foreach ($data_aju as $aju) {
			// foreach ($kategori as $kat){
			// 	if($aju->kategori == $kat->id){
			// 		echo $kat->kategori;
			// 	}
			// }

			$data = array(
				'kategori' => $aju->kategori,
				'isi' => $aju->isi,
				'poin' => $aju->poin,
				
			);
		}

		if($this->db->insert('tbl_pelanggaran', $data)){
			$data_status = array(
				'Status' => '2',
				
			);
		if($this->db->update('tbl_ajukan', $data_status, array('id' => $id))){
            redirect('Pelanggaran/Masuk'); 
         }
		}
		
	}
}
