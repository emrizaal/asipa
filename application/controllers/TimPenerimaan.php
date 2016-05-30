<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimPenerimaan extends CI_Controller {

	public function kontrak(){
		parent::__construct();
		$this->load->model("m_kontrak");
		$this->load->model("m_pengelompokan");
	}

	public function index(){
		$this->load->view('top');
		$data['paket']='';
		$this->load->view("timPenerimaan/view",$data);
		$this->load->view('bottom');
	}

	public function Add(){
		$this->load->view('top');
		$data['paket']='';
		$this->load->view("timPenerimaan/add",$data);
		$this->load->view('bottom');
	}

}

?>