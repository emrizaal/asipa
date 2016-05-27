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
}