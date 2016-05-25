<?php

class M_usulan extends CI_Model {

	function m_usulan(){
		parent::__construct();
	}


	function getUsulanByIdJurusan($id){
		$query = $this->db->query("SELECT * from paket where ID_JURUSAN = '$id' AND STATUS = 1 ")->result_array();
		return $query;
	}

}