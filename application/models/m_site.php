<?php

class M_site extends CI_Model {

	function m_site(){
		parent::__construct();
	}

	function Auth($u,$p){
		$query = $this->db->query("SELECT * FROM user where username='$u' AND password='$p'")->row_array();
		return $query;
	}

	//Mengambil data id lokasi berdasarkan nama lokasi
	function getIdLokasiByName($id,$name){
		$query = $this->db->query("SELECT ID_LOKASI from lokasi where ID_JURUSAN='$id' AND NAMA_LOKASI = '$name'")->row_array();
		return $query;	
	}

	function getStartDate($thn){
		$date = $this->db->query("SELECT TANGGAL_MULAI AS tgl FROM pagu WHERE TAHUN_ANGGARAN = $thn")->row();
		return $date;
	}

	function getDeadline(){
		$date = $this->db->query("SELECT *  FROM deadline")->result_array();
		return $date;
	}

	function getFase($thn){
		return 1;
	}

	
}

?>
