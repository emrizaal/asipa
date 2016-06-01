<?php

class M_kategori extends CI_Model {

	function m_kategori(){
		parent::__construct();
	}

	function getAllKategori(){
		$query = $this->db->query("SELECT * FROM kategori")->result_array();
		return $query;
	}

	function getMaxRevisi($id){
		$query = $this->db->query("SELECT MAX(REVISI) as m from alat where ID_USULAN='$id'")->row_array();
		return $query;
	}


}


?>