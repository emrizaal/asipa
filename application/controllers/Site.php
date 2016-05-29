<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function main(){
		parent::__construct();

	}

	public function index(){
		// $this->load->view('top');
		// $this->load->view("index");
		$this->load->view('site/login');

	}
	public function login(){
		redirect(base_url().'Dashboard');


	}
	
}
