<?php

class M_pengelompokan extends CI_Model {

	function m_pengelompokan(){
		parent::__construct();
	}


	function getAllPengelompokan(){
		$query = $this->db->query("SELECT * from paket where STATUS = 2")->result_array();
		return $query;
	}

}