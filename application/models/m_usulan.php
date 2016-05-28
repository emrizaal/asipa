<?php

class M_usulan extends CI_Model {

	function m_usulan(){
		parent::__construct();
	}

	//Mengambil data usulan berdasarkan id jurusan
	function getUsulanByIdJurusan($id){
		$query = $this->db->query("SELECT * from usulan,jurusan where usulan.ID_JURUSAN = '$id' AND usulan.STATUS = 1 AND jurusan.ID_JURUSAN = usulan.ID_JURUSAN")->result_array();
		return $query;
	}

}