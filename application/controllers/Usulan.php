<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

	public function usulan(){
		parent::__construct();
		$this->load->model("m_usulan");

	}

	public function index(){
		$this->load->view('top');
		$id = 1;//$this->session->userdata("id_jurusan");
		$data['usulan']=$this->m_usulan->getUsulanByIdJurusan($id);
		$this->load->view('usulan/usulan_view',$data);
		$this->load->view('bottom');
	}

	public function addUsulan(){
		$this->load->view('top');
		$this->load->view('usulan/usulan_add');
		$this->load->view('bottom');
	}
}