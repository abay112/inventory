<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template','database');

	}

	public function getFetchData()
	{
		$qw = "SELECT * FROM tbl_supplier";
		$query = $this->db->query($qw);
		return $query;				
	}

}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */
