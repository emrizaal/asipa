<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function site(){
		parent::__construct();
		$this->load->model('m_progress');
	}

	public function index(){
		// $this->load->view('top');
		// $this->load->view("index");
		$this->load->view('site/login');

	}
	public function login(){
		$username = $this->input->post('user-name');
		$password = md5($this->input->post('pass-word'));
		$cek = $this->m_site->Auth($username,$password);
		if($cek){
			$cek['PROGRESS']=$this->m_progress->getProgressByUserJurusan($cek['ID_JURUSAN'],$cek['ID_JENIS_USER']);
			$this->session->set_userdata($cek);
			redirect(base_url().'Dashboard');
		}else{
			$this->session->set_flashdata('data', '1');
			redirect(site_url());
		}
			// echo $this->session->userdata('USERNAME');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}
	
}
