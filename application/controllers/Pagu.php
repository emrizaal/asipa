<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagu extends CI_Controller {

	public function pagu(){
		parent::__construct();
		$this->load->model("m_pagu");

	}

	public function index(){
		$this->load->view('top');
		$id = $this->session->userdata("ID_JURUSAN");
		$data['pagu']=$this->m_pagu->getPaguByIdJurusan($id);
		$data['jurusan']=$this->m_data->getAllDataTbl('jurusan')->result();
		$this->load->view('pagu/pagu_view',$data);
		$this->load->view('bottom');
	}

	//Menampilkan form add pagu
	//[PopUp]
	public function addPagu(){
		$this->load->view('pagu/pagu_add');
	}

	//Menampilkan form edit pagu
	//[PopUp]
	public function editPagu($id){
		$data['pagu']=$this->m_pagu->getPaguByIdPagu($id);
		$this->load->view('pagu/pagu_edit',$data);
	}

	//Menyimpan data pagu
	public function savePagu(){
		$p = $this->input->post();
		$p['id_jurusan'] = $this->session->userdata("ID_JURUSAN");
		$p['tahun_anggaran']=date("Y");
		$this->m_pagu->savePagu($p);
		redirect("Pagu");
	}

	//Mengupdate data pagu
	public function updatePagu(){
		$p = $this->input->post();
		$this->m_pagu->updatePagu($p);
		redirect("Pagu");
	}


	
}
