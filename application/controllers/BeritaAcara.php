<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaAcara extends CI_Controller {

	public function kontrak(){
		parent::__construct();
		$this->load->model("m_kontrak");
		$this->load->model("m_pengelompokan");
		$this->load->model("m_beritaacara");
	}

	public function index(){
		$this->load->view('top');
		$data['paket']=$this->m_beritaacara->getAllDataPaket();
		$this->load->view("berita_acara/view",$data);
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