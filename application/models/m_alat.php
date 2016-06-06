<?php

class M_alat extends CI_Model {

	function m_alat(){
		parent::__construct();
	}

	function getAllRevisiByIdUsulan($id){
		$query = $this->db->query("SELECT *,(SELECT NAMA_PEGAWAI from user,pegawai where user.ID_USER=alat.ID_USER AND pegawai.NIP = user.NIP) as NAMA, (SELECT NAMA_JENIS_USER from jenis_user,user where user.ID_USER=alat.ID_USER AND user.ID_JENIS_USER = jenis_user.ID_JENIS_USER) as JENIS from alat where alat.ID_USULAN = '$id' group by REVISI order by REVISI ASC")->result_array();
		return $query;
	}

	function getMaxRevisi($id){
		$query = $this->db->query("SELECT MAX(REVISI) as m from alat where ID_USULAN='$id'")->row_array();
		return $query;
	}

	function getMaxRevisiHps($id){
		$query = $this->db->query("SELECT MAX(REVISI) as m from alat where ID_PAKET='$id'")->row_array();
		return $query;	
	}

	function getAlatByIdUsulan($id,$max){
		$query = $this->db->query("SELECT *,(SELECT NAMA_PEGAWAI from pegawai,user where pegawai.NIP = user.NIP AND alat.ID_USER = user.ID_USER) as NAMA_PEGAWAI from alat where ID_USULAN ='$id' AND REVISI='$max[m]'")->result_array();
		return $query;
	}

	function getAlatByIdPengelompokan($id,$max){
		$query = $this->db->query("SELECT *,(SELECT NAMA_PEGAWAI from pegawai,user where pegawai.NIP = user.NIP AND alat.ID_USER = user.ID_USER) as NAMA_PEGAWAI from alat where ID_PAKET ='$id' AND REVISI='$max[m]'")->result_array();
		return $query;	
	}

	function getAlatByIdUsulanAndFinal($id,$max){
		$query = $this->db->query("SELECT *,(SELECT NAMA_PEGAWAI from pegawai,user where pegawai.NIP = user.NIP AND alat.ID_USER = user.ID_USER) as NAMA_PEGAWAI from alat where ID_USULAN ='$id' AND REVISI='$max[m]' OR IS_FINAL=1")->result_array();
		return $query;	
	}

	function getAlatByIdKategori($kat){
		$query = $this->db->query("SELECT * from alat,lokasi,jurusan where alat.ID_LOKASI=lokasi.ID_LOKASI AND jurusan.ID_JURUSAN = alat.ID_JURUSAN AND IS_FINAL = 1 AND ID_KATEGORI = '$kat'")->result_array();
		return $query;
	}

	//Mengubah is final jadi nol ketika manajemen save pengajuan
	function clearFinal($id){
		$query = $this->db->query("UPDATE alat set IS_FINAL = 0 where ID_JURUSAN = '$id'");
		return $query;
	}

	//Menyimpan data alat
	function saveAlat($p){
		$query = $this->db->query("INSERT INTO alat(
			TANGGAL_UPDATE,
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
			DATA_AHLI,
			PRIORITY,
			ID_KATEGORI
			)values(
			NOW(),
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
			'$p[data_ahli]',
			'$p[prioritas]',
			'$p[kategori]'
			)");
		return $query;
	}

	function saveUpdateAlat($p){
		if($p['ref']==""){
			$query = $this->db->query("INSERT INTO alat(
				TANGGAL_UPDATE,
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
				REVISI,
				DATA_AHLI,
				PRIORITY,
				ID_KATEGORI,
				KONFIRMASI,
				IS_FINAL
				)values(
				NOW(),
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
				'$p[revisi]',
				'$p[data_ahli]',
				'$p[prioritas]',
				'$p[kategori]',
				'$p[konfirmasi]',
				'$p[is_final]'
				)");
		}else{
			$query = $this->db->query("INSERT INTO alat(
				TANGGAL_UPDATE,
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
				DATA_AHLI,
				PRIORITY,
				ID_KATEGORI,
				KONFIRMASI,
				IS_FINAL
				)values(
				NOW(),
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
				'$p[data_ahli]',
				'$p[prioritas]',
				'$p[kategori]',
				'$p[konfirmasi]',
				'$p[is_final]'
				)");
		}
		return $query;
	}

	function saveUpdateAlatHps($p){
		if($p['ref']==""){
			$query = $this->db->query("INSERT INTO alat(
				TANGGAL_UPDATE,
				ID_JURUSAN,
				ID_USER,
				ID_LOKASI,
				ID_FASE,
				ID_PAKET,
				NAMA_ALAT,
				SPESIFIKASI,
				SETARA,
				SATUAN,
				JUMLAH_ALAT,
				HARGA_SATUAN,
				JUMLAH_DISTRIBUSI,
				REVISI,
				DATA_AHLI,
				PRIORITY,
				ID_KATEGORI,
				KONFIRMASI,
				IS_FINAL
				)values(
				NOW(),
				'$p[id_jurusan]',
				'$p[id_user]',
				'$p[id_lokasi]',
				'1',
				'$p[id_paket]',
				'$p[nama_alat]',
				'$p[spesifikasi]',
				'$p[setara]',
				'$p[satuan]',
				'$p[jumlah_alat]',
				'$p[harga_satuan]',
				'$p[jumlah_distribusi]',
				'$p[revisi]',
				'$p[data_ahli]',
				'$p[prioritas]',
				'$p[kategori]',
				'$p[konfirmasi]',
				'$p[is_final]'
				)");
		}else{
			$query = $this->db->query("INSERT INTO alat(
				TANGGAL_UPDATE,
				ID_JURUSAN,
				ID_USER,
				ID_LOKASI,
				ID_FASE,
				ID_PAKET,
				NAMA_ALAT,
				SPESIFIKASI,
				SETARA,
				SATUAN,
				JUMLAH_ALAT,
				HARGA_SATUAN,
				JUMLAH_DISTRIBUSI,
				REFERENSI_TERKAIT,
				REVISI,
				DATA_AHLI,
				PRIORITY,
				ID_KATEGORI,
				KONFIRMASI,
				IS_FINAL
				)values(
				NOW(),
				'$p[id_jurusan]',
				'$p[id_user]',
				'$p[id_lokasi]',
				'2',
				'$p[id_paket]',
				'$p[nama_alat]',
				'$p[spesifikasi]',
				'$p[setara]',
				'$p[satuan]',
				'$p[jumlah_alat]',
				'$p[harga_satuan]',
				'$p[jumlah_distribusi]',
				'$p[ref]',
				'$p[revisi]',
				'$p[data_ahli]',
				'$p[prioritas]',
				'$p[kategori]',
				'$p[konfirmasi]',
				'$p[is_final]'
				)");
		}
		return $query;
	}

	function updateFinal($p){
		$query = $this->db->query("UPDATE alat set IS_FINAL = 1 where ID_USULAN = '$p[id_usulan]' AND REVISI = '$p[revisi_ke]'");
		return $query;
	}
	function updateKategoriAlat($kat,$id){
		$query = $this->db->query("UPDATE alat set ID_PAKET = '$id' where IS_FINAL = '1' AND ID_KATEGORI = '$kat'");
		return $query;
	}

}


?>