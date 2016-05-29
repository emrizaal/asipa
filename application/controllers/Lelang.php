<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang extends CI_Controller {

	public function lelang(){
		parent::__construct();
		$this->load->model("m_lelang");
	}

	public function index(){
		$this->load->view('top');
		$data['lelang']=$this->m_lelang->getAllLelang();
		$this->load->view("lelang/lelang_view",$data);
		$this->load->view('bottom');
	}

	//Menampilkan form edit lelang
	//[PopUp]
	public function editLelang(){

	}

	//Update 
	public function updateLelang(){
		$p = $this->input->post();
		if($p['status']==8){
			$this->m_lelang->updateLelangNormal($p);
		}else if($p['status']==9){
			$this->m_lelang->updateLelangSukses($p);
		}else if($p['status']==-9){
			$this->m_lelang->updateLelangGagal($p);
		}
		redirect("Lelang");
	}

}

?>