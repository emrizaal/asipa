<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelompokan extends CI_Controller {

	public function pengelompokan(){
		parent::__construct();
		$this->load->model("m_pengelompokan");
		$this->load->model("m_kategori");
		$this->load->model("m_alat");
		$this->load->model("m_timHps");

	}

	public function index(){
		$this->load->view('top');
		$tahun=date("Y");
		$data['kategori']=$this->m_kategori->getAllKategoriWithPaket($tahun);
		$this->load->view('pengelompokan/pengelompokan_view',$data);
		$this->load->view('bottom');
	}

	//Menampilkan form add pengelompokan
	//[PopUp]
	public function addPengelompokan(){
		$this->load->view('pengelompokan/pengelompokan_add');
	}

	//Menyimpan data pengelompokan
	public function savePengelompokan(){
		// $p = $this->input->post();
		// $id = 1;//$this->session->userdata("id_jurusan");
		// $tahun = date("Y");
		// $this->m_pengelompokan->savePengelompokan($id,$tahun,$p);
		// redirect("Pengelompokan");

		$p=$this->input->post();
		$p['id_user']=$this->session->userdata("ID_USER");
		$p['tahun_anggaran']=date("Y");
		$id = $this->m_pengelompokan->savePengelompokan($p);
		$this->m_alat->updateKategoriAlat($p['kategori'],$id);
		redirect("Pengelompokan");
	}

	//Menampilkan form edit pengelompokan
	//[PopUp]
	public function editPengelompokan(){

	}

	//
	public function updatePengelompokan(){
		$p = $this->input->post();
		$this->m_pengelompokan->updatePengelompokan($p);
		redirect("Pengelompokan");
	}

	public function getPaketByIdKategori($kat){
		$data['tim']=$this->m_timHps->getAllTimHps();
		$data['kat'] = $this->m_alat->getAlatByIdKategori($kat);
		$data['paket']=$this->m_alat->getPaketAlatByIdKategori($kat);
		$this->load->view("pengelompokan/detail_pengelompokan_view",$data);
	}

}


?>