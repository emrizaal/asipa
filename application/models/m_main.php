<?php

class m_main extends CI_Model {

	function m_main(){
		parent::__construct();
	}

	function auth($username,$password){ // membuat method auth dengan parameter username dan password
		$query = $this->db->query("SELECT * from admin where username = '$username' AND password = '$password'")->row_array(); //Query untuk data pada tabel admin berdasarkan username dan password
		return $query;
	}
	
}

?>