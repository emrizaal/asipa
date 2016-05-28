<?php

class M_lokasi extends CI_Model {

	function m_lokasi(){
		parent::__construct();
	}

	//Mengambil data nama lokasi berdasarkan id jurusan
	function getNamaLokasiByIdJurusan($id){
		$query = $this->db->query("SELECT NAMA_LOKASI from lokasi where ID_JURUSAN='$id'")->result_array();
		return $query;
	}
}

?>
