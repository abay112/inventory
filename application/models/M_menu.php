<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template', 'database');
	}	

	public function getAlldata()
	{
		$qw = "SELECT * FROM tbl_supplier";
		$query = $this->db->query($qw);
		return $query;
	}

}


/* End of file M_menu.php */
/* Location: ./application/models/M_menu.php */
