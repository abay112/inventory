<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_menu extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template','database');
		$this->load->model('m_menu');
	}

	public function index()
	{
	$data['title'] = 'Supplier';
	$this->template->display('v_menu',$data);
	}

	public function fetchData()
	{
		$result = array('data' => array());
		$data = $this->m_menu->getAlldata()->result_array();
		$no = 1;
		foreach ($data as $key => $value) {
			$buttons = '<button class="btn btn-sm btn-default">
			<i class="glyphicon glyphicon-edit"></i></button>
			<button class="btn btn-sm btn-danger" type="button">
                    <i class="glyphicon glyphicon-trash"></i></button>';


			$result['data'][$key] = array (

				$no++,
				$value['supplier_code'],
				$value['supplier_name'],
				$buttons,
			);
		}
		echo json_encode($result);
	}

	

}

/* End of file C_menu.php */
/* Location: ./application/controllers/C_menu.php */
