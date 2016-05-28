<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang extends CI_Controller {

	public function lelang(){
		parent::__construct();
		$this->load->model("m_lelang");
	}

	public function index(){
		$this->load->view('top');
		$data['lelang']=$this->m_lelang->getAllLelang();
		$this->load->view("lelang/lelang_view",$data);
		$this->load->view('bottom');
	}

	//Menampilkan form edit lelang
	//[PopUp]
	public function editLelang(){

	}

	//Update 
	public function updateLelang(){
		$p = $this->input->post();
		$this->m_lelang->updateLelang($p);
	}

}

?>