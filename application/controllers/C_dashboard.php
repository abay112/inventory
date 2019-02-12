<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template','database');
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		$data['title'] = 'Material';
		$data['menu'] = $this->m_dashboard->getDataStore()->result();
		$this->template->display('v_dashboard',$data);			
	}

	public function addMaterial()
	{
		$kdmaterial  = $this->input->post('kdmat');
		$nammaterial = $this->input->post('namamat');
		$desmaterial = $this->input->post('desmat');
		$tgldate  = $this->input->post('tglmat');
		$update = $this->input->post('updmat');

		$data = array(
					  'material_code' => $kdmaterial,
					  'material_name' => $nammaterial,
					  'material_desc' => $desmaterial,
					  'material_created_date' => $tgldate,
					  'material_updated_date' => $update
						);

		$query = $this->m_dashboard->addInventory($data);
			if ($this->db->affected_rows() > 0){
				$this->session->set_flashdata('mess_sukses', '<div class="alert alert-success fade in">
    								<strong>Success!</strong> Data Berhasil di input.
    								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  									</button>
							   </div>');
				redirect('c_dashboard');	
			}
			else
			{
			$this->session->set_flashdata('mess_sukses', '<div class="alert alert-warning fade in">
    								<strong>Gagal!</strong> Data Gagal di input.
    								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  									</button>
							   </div>');
				redirect('c_dashboard');	

			}	
	}

	public function detailMat($id)
	{
		$data= $this->m_dashboard->getDetailMat($id);
		echo json_encode($data);
	}

	public function editMaterial()
	{
		$idmat  = $this->input->post('id_mat');
		$kdmat  = $this->input->post('kd_mat');
		$nammat = $this->input->post('nama_mat');
		$desmat = $this->input->post('des_mat');
		$updmat = $this->input->post('upd_mat');


		$this->m_dashboard->EditDataMat($idmat,$kdmat,$nammat,$desmat,$updmat);
		if ($this->db->affected_rows() > 0){
				$this->session->set_flashdata('mess_sukses', '<div class="alert alert-success fade in">
    								<strong>Success!</strong> Data Berhasil di Ubah.
    								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  									</button>
							   </div>');
				redirect('c_dashboard');	
		}
	}

	public function delMaterial()
	{
		$id = $this->input->post('id');
		$this->m_dashboard->getDelMat($id);
		redirect('c_dashboard');	
	}


	
}

/* End of file c_dashboard.php */
/* L
ocation: ./application/controllers/c_dashboard.php */