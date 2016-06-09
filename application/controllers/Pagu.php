<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagu extends CI_Controller {

	public function pagu(){
		parent::__construct();
		$this->load->model("m_pagu");
		$this->load->model("m_jurusan");
	}

	public function index($tahun=0){
		$this->load->view('top');
		$id = $this->session->userdata("ID_JURUSAN");
		$data['currentDate']=date("Y");
		if($tahun!=0){
			$data['currentDate']=$tahun;
		}
		$data['periode']=$this->m_pagu->getPeriodePagu();
		$data['pagu']=$this->m_pagu->getPaguByPeriode($data['currentDate']);
		$data['jurusan']=$this->m_jurusan->getAllJurusan();
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
		foreach($p['pagu'] as $key=>$a){
			$data=array(
				'id_jurusan'=>$key,
				'pagu'=>$a,
				'tahun_anggaran'=>date("Y"),
				'tanggal_mulai'=>date('Y-m-d'),
				);
			$this->m_pagu->savePagu($data);
		}
		$konten = 'Data Pagu Telah Dimasukkan Pada '.IndoTgl(date('Y-m-d'));
		SendSMS($konten,'08997150058','Pagu');
		redirect("Pagu");
	}

	//Mengupdate data pagu
	public function updatePagu(){
		$p = $this->input->post();
		foreach($p['pagu'] as $key=>$a){
			$data=array(
				'id_jurusan'=>$key,
				'pagu'=>$a,
				'tahun_anggaran'=>date("Y"),
				);
			$this->m_pagu->updatePagu($data);
		}
		redirect("Pagu");
	}


	
}
