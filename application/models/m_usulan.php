<?php

class M_usulan extends CI_Model {

	function m_usulan(){
		parent::__construct();
	}

	//Mengambil data usulan berdasarkan id jurusan
	function getUsulanByIdJurusan($id){
		$query = $this->db->query("SELECT * from usulan,jurusan where usulan.ID_JURUSAN = '$id' AND jurusan.ID_JURUSAN = usulan.ID_JURUSAN")->result_array();
		return $query;
	}

	//Mengambil data usulan berdasarkan Id Usulan
	function getUsulanByIdUsulan($id){
		$query = $this->db->query("SELECT * from usulan,pagu where ID_USULAN = '$id' AND usulan.TAHUN_ANGGARAN = pagu.TAHUN_ANGGARAN")->row_array();
		return $query;
	}

	//Menyimpan data usulan
	function saveUsulan($p){
		$query = $this->db->query("INSERT into usulan(
			ID_USER,
			ID_JURUSAN,
			NAMA_PAKET,
			TANGGAL_DIBUAT,
			TAHUN_ANGGARAN,
			TOTAL_ANGGARAN
			)values(
			'$p[id_user]',
			'$p[id_jurusan]',
			'$p[nama]',
			NOW(),
			'$p[tahun]',
			'$p[total]'
			)");
		return $this->db->insert_id();
	}

}