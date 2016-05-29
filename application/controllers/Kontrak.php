<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

	public function kontrak(){
		parent::__construct();
		$this->load->model("m_kontrak");
		$this->load->model("m_pengelompokan");
	}

	public function index(){
		$this->load->view('top');
		$data['paket']=$this->m_pengelompokan->getAllPengelompokanForKontrak();
		$this->load->view("kontrak/kontrak_view",$data);
		$this->load->view('bottom');
	}

	//Menampilkan detail dari kontrak
	public function detail($id){
		$this->load->view('top');
		$data['paket']=$this->m_pengelompokan->getPengelompokanById($id);
		$data['kontrak']=$this->m_kontrak->getKontrakByIdPaket($id);
		$this->load->view("kontrak/kontrak_detail",$data);
		$this->load->view('bottom');	
	}

	public function saveKontrak(){
		$config['upload_path']   =   "assets/kontrak";
		$config['allowed_types'] =   "*"; 
		$config['max_size']      =   "50000";
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
			$finfo['file_name']="";
		}else{
			$finfo=$this->upload->data();
		}

		$p = $this->input->post();
		$p['file'] = $finfo['file_name'];
		$p['id_user']=1;//$this->session->userdata("id_jurusan");
		$this->m_kontrak->saveKontrak($p);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function updateKontrak(){
		$config['upload_path']   =   "assets/kontrak";
		$config['allowed_types'] =   "*"; 
		$config['max_size']      =   "50000";
		$this->load->library('upload',$config);
		$p = $this->input->post();

		if(!$this->upload->do_upload('fupload')){
			echo $this->upload->display_errors();
			$finfo['file_name']="";
		}else{
			$kontrak = $this->m_kontrak->getKontrakById($p['id_kontrak']);
			unlink("assets/kontrak/".$kontrak['FILE']);
			$finfo=$this->upload->data();
		}
		
		$p['file'] = $finfo['file_name'];
		$this->m_kontrak->updateKontrak($p);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteKontrak($id){
		$kontrak = $this->m_kontrak->getKontrakById($id);
		$res=$this->m_kontrak->deleteKontrak($id);
		if($res){
			unlink("assets/kontrak/".$kontrak['FILE']);
		}
		redirect($_SERVER['HTTP_REFERER']);	
	}

}

?>