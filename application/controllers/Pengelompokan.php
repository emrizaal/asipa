<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelompokan extends CI_Controller {

	public function pengelompokan(){
		parent::__construct();
		$this->load->model("m_pengelompokan");

	}

	public function index(){
		$this->load->view('top');
		$data['pengelompokan']=$this->m_pengelompokan->getAllPengelompokan();
		$this->load->view('pengelompokan/pengelompokan_view',$data);
		$this->load->view('bottom');
	}

	//Menampilkan form add pengelompokan
	//[PopUp]
	public function addPengelompokan(){
		$this->load->view('pengelompokan/pengelompokan_add');
	}

	//Menyimpan data pengelompokan
	public function savePengelompokan(){
		$p = $this->input->post();
		$id = 1;//$this->session->userdata("id_jurusan");
		$tahun = date("Y");
		$this->m_pengelompokan->savePengelompokan($id,$tahun,$p);
		redirect("Pengelompokan");
	}

	//Menampilkan form edit pengelompokan
	//[PopUp]
	public function editPengelompokan(){

	}

	public function updatePengelompokan(){
		$p = $this->input->post();
		$this->m_pengelompokan->updatePengelompokan($p);
		redirect("Pengelompokan");
	}

}


?>