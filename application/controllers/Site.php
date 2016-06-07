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
			$id_jenis = $this->session->userdata('ID_JENIS_USER');
			if($id_jenis==1 || $id_jenis==2 || $id_jenis == 3){
				redirect(base_url().'Dashboard');
			}elseif($id_jenis == 4){
				redirect(base_url().'Pagu');
			}elseif($id_jenis == 5){
				redirect(base_url().'Pengelompokan');
			}elseif($id_jenis == 6){
				redirect(base_url().'HPS');
			}elseif($id_jenis == 7){
				redirect(base_url().'Lelang');
			}elseif($id_jenis == 8){
				redirect(base_url().'BeritaAcara');
			}elseif($id_jenis == 9){
				redirect(base_url().'BeritaAcara');
			}elseif($id_jenis == 10){
				redirect(base_url().'SPM');
			}elseif($id_jenis == 10){
				redirect(base_url().'SPM');
			}elseif($id_jenis == 11){
				redirect(base_url().'Performa');
			}
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
