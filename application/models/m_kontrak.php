<?php

class M_kontrak extends CI_Model {

	function m_kontrak(){
		parent::__construct();
	}

	function getKontrakById($id){
		$query = $this->db->query("SELECT * from kontrak where ID_KONTRAK = '$id'")->row_array();
		return $query;
	}

	function getKontrakByIdPaket($id){
		$query = $this->db->query("SELECT * from kontrak,user where ID_PAKET = '$id' AND user.ID_USER = kontrak.ID_USER")->result_array();
		return $query;
	}

	function saveKontrak($p){
		$query = $this->db->query("INSERT into kontrak(
			ID_PAKET,
			ID_USER,
			KETERANGAN,
			FILE
			)values(
			'$p[id_paket]',
			'$p[id_user]',
			'$p[keterangan]',
			'$p[file]'
			)");
		return $query;
	}

	function deleteKontrak($id){
		$query = $this->db->query("DELETE from kontrak where ID_KONTRAK = '$id'");
		return $query;
	}

	function updateKontrak($p){
		if($p['file']!=""){
			$query = $this->db->query("UPDATE kontrak set 
				KETERANGAN='$p[keterangan]',
				FILE='$p[file]'
				where ID_KONTRAK='$p[id_kontrak]'");
		}
		else{
			$query = $this->db->query("UPDATE kontrak set 
				KETERANGAN='$p[keterangan]'
				where ID_KONTRAK='$p[id_kontrak]'");
		}
		return $query;
	}
}

?>