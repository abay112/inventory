<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_outlet extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template','database');
	}

	public function index()
	{
		$data['title'] = 'Data Outlet';
		$this->template->display('v_outlet',$data);	
	}
}

/* End of file C_outlet.php */
/* Location: ./application/controllers/C_outlet.php */
?>