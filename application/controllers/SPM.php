<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SPM extends CI_Controller {

	public function kontrak(){
		parent::__construct();
		$this->load->model("m_kontrak");
		$this->load->model("m_pengelompokan");
	}

	public function index(){
		$this->load->view('top');
		$data['paket']='';
		$this->load->view("spm/view",$data);
		$this->load->view('bottom');
	}

	public function BAPP(){
		$this->load->view('top');
		$data['paket']='';
		$this->load->view("berita_acara/bapp",$data);
		$this->load->view('bottom');
	}

}

?>