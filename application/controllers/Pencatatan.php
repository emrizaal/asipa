<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencatatan extends CI_Controller {

	public function usulan(){
		parent::__construct();
		
	}

	public function index(){
		$id_jenis = $this->session->userdata('ID_JENIS_USER');
		$this->load->view('top');
		$this->load->view('pencatatan/pencatatan_view');
		$this->load->view('bottom');
		

	}
	public function Detail($id){
		$id_jenis = $this->session->userdata('ID_JENIS_USER');
		$this->load->view('top');
		$this->load->view('pencatatan/pencatatan_detail');
		$this->load->view('bottom');
		

	}

	
}

?>