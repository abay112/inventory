<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function getUser($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user_table');
		return $query->num_rows(); 
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */
?>