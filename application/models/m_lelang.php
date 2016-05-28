<?php

class M_lelang extends CI_Model {

	function m_lelang(){
		parent::__construct();
	}

	function getAllLelang(){
		$query = $this->db->query("SELECT * from paket where STATUS in (8,9,-9)")->result_array();
		return $query;
	}
}

?>