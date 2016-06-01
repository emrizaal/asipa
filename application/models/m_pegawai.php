<?php

class M_pegawai extends CI_Model {

	function m_pegawai(){
		parent::__construct();
	}

	function getAllPegawai(){
		$query = $this->db->query("SELECT * from pegawai")->result_array();
		return $query;
	}
}

?>