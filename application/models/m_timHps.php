<?php

class M_timHps extends CI_Model {

	function m_timHps(){
		parent::__construct();
	}

	function getAllTimHps(){
		$query = $this->db->query("SELECT * from team_hps")->result_array();
		return $query;
	}
}

?>