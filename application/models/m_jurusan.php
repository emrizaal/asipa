<?php

class M_jurusan extends CI_Model {

	function m_jurusan(){
		parent::__construct();
	}

	function getAllJurusan(){
		$query = $this->db->query("SELECT * from jurusan")->result_array();
		return $query;
	}
}

?>