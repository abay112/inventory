<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','captcha');
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['message'] = '';
		$this->load->view('v_login',$data);
	}

	//public function doCaptcha()
	//{
	//	$vals = array(
    //    'word'          => '',
    //    'img_path'      => './captcha/',
    //    'img_url'       => 'http://localhost/captcha/',
    //    'font_path'     => './path/to/fonts/texb.ttf',
    //    'img_width'     => '150',
    //    'img_height'    => 30,
    //    'expiration'    => 7200,
    //    'word_length'   => 8,
    //    'font_size'     => 16,
    //    'img_id'        => 'Imageid',
    //    'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

    //    'colors'        => array(
    //            'background' => array(255, 255, 255),
    //            'border' => array(255, 255, 255),
    //            'text' => array(0, 0, 0),
    //            'grid' => array(255, 40, 40)
    //    	)
	//	);
  	//	$cap= create_captcha($vals);
	//	echo $cap['image'];
	//}

	public function doLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$login = $this->m_login->getUser($username,$password);

		if ($login > 0)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success fade in">
    								<strong>Success!</strong> Login Sukses.
    								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  									</button>
							   </div>');
			redirect('c_dashboard','message');
		}
		else
		{
			$data['message'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  									<strong>INFO!</strong> Data tidak ditemukan.
  									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    								<span aria-hidden='true'>&times;</span>
  									</button>
								</div>";
			$this->load->view('v_login',$data);
		}

	}

	public function logout()
	{
	$this->session->unset_userdata($data);
	redirect('c_login');
	}

}

/* End of file C_login.php */
/* Location: ./application/controllers/C_login.php */