<?php

class M_pagu extends CI_Model {

	function m_pagu(){
		parent::__construct();
	}

	//Mengambil data pagu berdasarkan id pagu
	function getPaguByIdPagu($id){
		$query = $this->db->query("SELECT * from pagu where ID_PAGU = '$id'")->row_array();
		return $query;
	}

	//Mengambil data pagu berdasarkan id jurusan
	function getPaguByIdJurusan($id){
		$query = $this->db->query("SELECT * from pagu where ID_JURUSAN = '$id' ORDER BY TAHUN_ANGGARAN DESC")->result_array();
		return $query;
	}

	//Mengambil data pagu di tahun sekarang berdasarkan id jurusan
	function getCurrentPaguByIdJurusan($id,$tahun){
		$query = $this->db->query("SELECT * from pagu where ID_JURUSAN = '$id' AND TAHUN_ANGGARAN = '$tahun'")->row_array();
		return $query;
	}

	//Menyimpan data pagu
	function savePagu($p){
		$query = $this->db->query("INSERT into pagu(
			ID_JURUSAN,
			PAGU_ALAT,
			TAHUN_ANGGARAN
			)values (
				'$p[id_jurusan]',
				'$p[pagu]',
				'$p[tahun_anggaran]'
			)");
		return $query;
	}

	//Mengupdate data pagu
	function updatePagu($p){
		$query = $this->db->query("UPDATE pagu set PAGU_ALAT = '$p[pagu]' where ID_PAGU = '$p[id]'");
		return $query;
	}
	
}

?>