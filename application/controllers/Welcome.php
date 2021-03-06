<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('tank_auth');
		$this->load->helper('security');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();			
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('LAY/index');
			$this->load->view('template/footer');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */