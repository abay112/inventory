<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataStore($id=NULL)
	{
		$qw = $this->db->query('SELECT material_id, material_code, material_name, material_desc, 
		                        material_created_date, material_created_by, material_updated_date FROM tbl_material');
		return $qw;
	}

	public function getDetailMat($id)
	{
		$query = $this->db->get_where('tbl_material', ['material_id' => $id]);
		return $query->row();
	}

	public function AddInventory($data)
	{
		$this->db->insert('tbl_material', $data);
	}

	public function EditDataMat($idmat,$kdmat,$nammat,$desmat,$updmat)
	{
		$hasil =$this->db->query("UPDATE tbl_material SET material_code='$kdmat', material_name='$nammat',
			                      material_desc='$desmat', material_updated_date='$updmat' WHERE material_id='".$_POST['id_mat']."'");
       //$hasil =$this->db->query("UPDATE tbl_Material SET material_desc='$des_mat' WHERE material_id='$id_mat'");
        
        return $hasil;
	}	

	public function getDelMat($id)
	{
		$this->db->where('material_id', $id);
		$this->db->delete('tbl_material');
	}
}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */