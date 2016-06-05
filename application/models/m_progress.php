<?php

class M_progress extends CI_Model {

	function m_progress(){
		parent::__construct();
	}

	function getProgressByUserJurusan($id,$id_jenis){
		$query=$this->db->query("SELECT * from progress_paket where ID_JURUSAN = '$id' AND ID_JENIS_USER='$id_jenis' order by ID_PROGRESS_PAKET DESC")->row_array();
		return $query;
	}

	function saveProgressUsulan($p){
		$query=$this->db->query("INSERT into progress_paket(
			ID_USER,
			ID_FASE,
			ID_USULAN,
			STATUS,
			REVISI_KE,
			ID_JURUSAN,
			ID_JENIS_USER
			)values(
			'$p[id_user]',
			'$p[id_fase]',
			'$p[id_usulan]',
			'$p[status]',
			'$p[revisi_ke]',
			'$p[id_jurusan]',
			'$p[id_jenis_user]'
			)");
		return $query;
	}

}

?>