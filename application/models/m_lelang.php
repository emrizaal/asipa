<?php

class M_lelang extends CI_Model {

	function m_lelang(){
		parent::__construct();
	}

	//Mengambil semua paket yang telah terferifikasi oleh PPK
	function getAllLelang(){
		$query = $this->db->query("SELECT * from paket where STATUS in (8,9,-9)")->result_array();
		return $query;
	}

	//Mengambil data paket lelang berdasarkan id paket
	function getPaketLelangById($id){

	}

	//Mengupdate data paket apabila status lelangnya sukses
	function updateLelangSukses($p){
		$query = $this->db->query("UPDATE paket set 
			STATUS='9',
			TENDER_A='$p[tender_a]',
			TENDER_B='$p[tender_b]',
			TENDER_C='$p[tender_c]',
			TENDER_D='$p[tender_d]',
			TENDER_E='$p[tender_e]',
			KETERANGAN_GAGAL_KONTRAK='' 
			where ID_PAKET='$p[id_paket]'
			");
		return $query;
	}

	//Mengupdate data paket apabila status lelangnya gagal
	function updateLelangGagal($p){
		$query = $this->db->query("UPDATE paket set 
			STATUS='-9',
			TENDER_A='',
			TENDER_B='',
			TENDER_C='',
			TENDER_D='',
			TENDER_E='',
			KETERANGAN_GAGAL_KONTRAK='$p[keterangan]' 
			where ID_PAKET='$p[id_paket]'
			");
		return $query;
	}

	//Mengupdate data paket kembali ke normal
	function updateLelangNormal($p){
		$query = $this->db->query("UPDATE paket set 
			STATUS='8',
			TENDER_A='',
			TENDER_B='',
			TENDER_C='',
			TENDER_D='',
			TENDER_E='',
			KETERANGAN_GAGAL_KONTRAK='' 
			where ID_PAKET='$p[id_paket]'
			");
		return $query;
	}
}

?>