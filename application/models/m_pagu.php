<?php

class M_pagu extends CI_Model {

	function m_pagu(){
		parent::__construct();
	}

	function getPaguByIdPagu($id){
		$query = $this->db->query("SELECT * from pagu where ID_PAGU = '$id'")->row_array();
		return $query;
	}

	function getPaguByIdJurusan($id){
		$query = $this->db->query("SELECT * from pagu where ID_JURUSAN = '$id' ORDER BY TAHUN_ANGGARAN DESC")->result_array();
		return $query;
	}

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

	function updatePagu($p){
		$query = $this->db->query("UPDATE pagu set PAGU_ALAT = '$p[pagu]' where ID_PAGU = '$p[id]'");
		return $query;
	}
	
}

?>