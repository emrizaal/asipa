<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

	public function usulan(){
		parent::__construct();
		$this->load->model("m_usulan");
		$this->load->model("m_pagu");
		$this->load->model("m_lokasi");
	}

	public function index(){
		$this->load->view('top');
		$id = 1;//$this->session->userdata("id_jurusan");
		$data['usulan']=$this->m_usulan->getUsulanByIdJurusan($id);
		$this->load->view('usulan/usulan_view',$data);
		$this->load->view('bottom');
	}

	//Menampilkan form add usulan
	public function addUsulan(){
		$id = 1;//$this->session->userdata("id_jurusan");
		$tahun = date("Y");
		$data['pagu']=$this->m_pagu->getCurrentPaguByIdJurusan($id,$tahun);
		$resLokasi=$this->m_lokasi->getNamaLokasiByIdJurusan($id);
		$lokasi=array();
		foreach($resLokasi as $re){	
			$lokasi[]=$re['NAMA_LOKASI'];
		}
		$data['lokasi']=json_encode($lokasi);
		$this->load->view('top');
		$this->load->view('usulan/usulan_add',$data);
	}

	public function saveUsulan(){
		$p = $this->input->post();
		print(json_encode($p['data'][9]));
	}
}

?>