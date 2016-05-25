<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagu extends CI_Controller {

	public function pagu(){
		parent::__construct();
		$this->load->model("m_pagu");

	}

	public function index(){
		$this->load->view('top');
		$id = 1;//$this->session->userdata("id_jurusan");
		$data['pagu']=$this->m_pagu->getPaguByIdJurusan($id);
		$this->load->view('pagu/pagu_view',$data);
		$this->load->view('bottom');
	}

	public function addPagu(){
		$this->load->view('pagu/pagu_add');
	}

	public function editPagu($id){
		$data['pagu']=$this->m_pagu->getPaguByIdPagu($id);
		$this->load->view('pagu/pagu_edit',$data);
	}

	public function savePagu(){
		$p = $this->input->post();
		$p['id_jurusan'] = 1;//$this->session->userdata("id_jurusan");
		$p['tahun_anggaran']=date("Y");
		$this->m_pagu->savePagu($p);
		redirect("Pagu");
	}

	public function updatePagu(){
		$p = $this->input->post();
		$this->m_pagu->updatePagu($p);
		redirect("Pagu");
	}


	
}
