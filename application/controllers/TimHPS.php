<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimHPS extends CI_Controller {

	public function kontrak(){
		parent::__construct();
		$this->load->model("m_kontrak");
		$this->load->model("m_pengelompokan");
	}

	public function index(){
		$this->load->view('top');
		$data['paket']='';
		$this->load->view("timHPS/view",$data);
		$this->load->view('bottom');
	}

	public function Add(){
		$this->load->view('top');
		$data['paket']='';
		$this->load->view("timHPS/add",$data);
		$this->load->view('bottom');
	}

}

?>