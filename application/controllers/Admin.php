<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_admin', 'admin');
	}
	public function index()
	{
        $data['list'] = 'pegawai/list';
		$data['list_data'] = $this->admin->dataPegawai();
		$this->load->view('index', $data);
	}

	public function saveData(){
		$method = $this->input->post('method');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');

		$data = array(
			"Pegawai_nama" => $nama,
			"Pegawai_alamat" => $alamat,
			"Pegawai_umur" => $umur,
		);
		if($method == 'add'){
			$this->db->insert("Pegawai",$data);
		}else{
			$this->db->where('Pegawai_Id', $id);
      		$this->db->update('Pegawai', $data);
		}
		redirect(base_url());
	}

	public function delete($id){
		$this->db->where('Pegawai_Id', $id);
		$this->db->delete('Pegawai');
		redirect(base_url());
	}

	public function get_data($id){
		$list_data = $this->admin->get_dataPegawai($id);

		$output = array(
			"status"    => TRUE,
			"list_data" => $list_data
		);
		echo json_encode($output);
	}
}
