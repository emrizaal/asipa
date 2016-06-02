<?php

class M_pegawai extends CI_Model {

	function m_pegawai(){
		parent::__construct();
	}

	function getAllPegawai(){
		$query = $this->db->query("SELECT * from pegawai")->result_array();
		return $query;
	}

	function getAllTeknisi(){
		$query = $this->db->query("SELECT * from pegawai where IS_TEKNISI = '1'")->result_array();
		return $query;
	}
}

?>