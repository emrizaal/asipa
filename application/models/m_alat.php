<?php

class M_alat extends CI_Model {

	function m_alat(){
		parent::__construct();
	}

	function getMaxRevisi($id){
		$query = $this->db->query("SELECT MAX(REVISI) as m from alat where ID_USULAN='$id'")->row_array();
		return $query;
	}

	function getAlatByIdUsulan($id){
		$max = $this->getMaxRevisi($id);
		$query = $this->db->query("SELECT * from alat where ID_USULAN ='$id' AND REVISI='$max[m]'")->result_array();
		return $query;
	}

	//Menyimpan data alat
	function saveAlat($p){
		$query = $this->db->query("INSERT INTO alat(
			ID_JURUSAN,
			ID_USER,
			ID_LOKASI,
			ID_FASE,
			ID_USULAN,
			NAMA_ALAT,
			SPESIFIKASI,
			SETARA,
			SATUAN,
			JUMLAH_ALAT,
			HARGA_SATUAN,
			JUMLAH_DISTRIBUSI,
			REFERENSI_TERKAIT,
			DATA_AHLI
			)values(
			'$p[id_jurusan]',
			'$p[id_user]',
			'$p[id_lokasi]',
			'1',
			'$p[id_usulan]',
			'$p[nama_alat]',
			'$p[spesifikasi]',
			'$p[setara]',
			'$p[satuan]',
			'$p[jumlah_alat]',
			'$p[harga_satuan]',
			'$p[jumlah_distribusi]',
			'$p[ref]',
			'$p[data_ahli]'
			)");
		return $query;
	}

	function saveUpdateAlat($p){
		if($p['ref']=""){
			$query = $this->db->query("INSERT INTO alat(
				ID_JURUSAN,
				ID_USER,
				ID_LOKASI,
				ID_FASE,
				ID_USULAN,
				NAMA_ALAT,
				SPESIFIKASI,
				SETARA,
				SATUAN,
				JUMLAH_ALAT,
				HARGA_SATUAN,
				JUMLAH_DISTRIBUSI,
				REFERENSI_TERKAIT,
				REVISI,
				DATA_AHLI
				)values(
				'$p[id_jurusan]',
				'$p[id_user]',
				'$p[id_lokasi]',
				'1',
				'$p[id_usulan]',
				'$p[nama_alat]',
				'$p[spesifikasi]',
				'$p[setara]',
				'$p[satuan]',
				'$p[jumlah_alat]',
				'$p[harga_satuan]',
				'$p[jumlah_distribusi]',
				'$p[ref]',
				'$p[revisi]',
				'$p[data_ahli]'
				)");
		}else{
			$query = $this->db->query("INSERT INTO alat(
				ID_JURUSAN,
				ID_USER,
				ID_LOKASI,
				ID_FASE,
				ID_USULAN,
				NAMA_ALAT,
				SPESIFIKASI,
				SETARA,
				SATUAN,
				JUMLAH_ALAT,
				HARGA_SATUAN,
				JUMLAH_DISTRIBUSI,
				REFERENSI_TERKAIT,
				REVISI,
				DATA_AHLI
				)values(
				'$p[id_jurusan]',
				'$p[id_user]',
				'$p[id_lokasi]',
				'1',
				'$p[id_usulan]',
				'$p[nama_alat]',
				'$p[spesifikasi]',
				'$p[setara]',
				'$p[satuan]',
				'$p[jumlah_alat]',
				'$p[harga_satuan]',
				'$p[jumlah_distribusi]',
				'$p[ref]',
				'$p[revisi]',
				'$p[data_ahli]'
				)");
		}
		return $query;
	}

}


?>