<?php

class M_usulan extends CI_Model {

	function m_usulan(){
		parent::__construct();
	}


	function getUsulanByIdJurusan($id){
		$query = $this->db->query("SELECT * from paket,jurusan where paket.ID_JURUSAN = '$id' AND paket.STATUS = 1 AND jurusan.ID_JURUSAN = paket.ID_JURUSAN")->result_array();
		return $query;
	}

}