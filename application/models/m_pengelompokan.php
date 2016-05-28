<?php

class M_pengelompokan extends CI_Model {

	function m_pengelompokan(){
		parent::__construct();
	}


	function getAllPengelompokan(){
		$query = $this->db->query("SELECT * from paket")->result_array();
		return $query;
	}

	function savePengelompokan($id,$tahun,$p){
		$query = $this->db->query("INSERT into paket(
			ID_USER,
			NAMA_PAKET,
			TAHUN_ANGGARAN
			) values(
			'$id',
			'$p[nama]',
			'$tahun'
			)");
		return $query;
	}

	function updatePengelompokan($p){
		$query = $this->db->query("UPDATE paket set 
			NAMA_PAKET='$p[nama]',
			LAST_UPDATE=NOW() 
			where ID_PAKET = '$p[id]'
			");
		return $query;
	}

}