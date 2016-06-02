<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {

	public function progress(){
		parent::__construct();
		$this->load->model("m_progress");
	}

	public function saveProgressUsulan(){
		$p=$this->input->post();
		$p['id_user']=$this->session->userdata("ID_USER");
		$p['id_jurusan']=$this->session->userdata("ID_JURUSAN");
		$p['id_jenis_user']=$this->session->userdata("ID_JENIS_USER");
		if($this->session->userdata("ID_JENIS_USER")==1){
			$p['id_fase']=1;	
			$p['status']=11;
		}

		$this->m_progress->saveProgressUsulan($p);
		redirect("Usulan");
	}

	public function saveProgressKonfirmasi(){
		$p=$this->input->post();
		$p['id_user']=$this->session->userdata("ID_USER");
		$p['id_jurusan']=$this->session->userdata("ID_JURUSAN");
		$p['id_jenis_user']=$this->session->userdata("ID_JENIS_USER");
		$p['revisi_ke']=$p['revisi']-1;
		if($this->session->userdata("ID_JENIS_USER")==2){
			$p['id_fase']=1;	
			$p['status']=-1;
		}
		$this->m_progress->saveProgressUsulan($p);
		redirect("Usulan");
	}
}

?>