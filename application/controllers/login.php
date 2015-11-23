<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->load->view('template/header');		
		$this->load->view('LAY/login');
		$this->load->view('template/footer');
	}

	public function signup()
	{		
		$this->load->view('signup');		
	}
	

	public function members()
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('LAY/index');
			$this->load->view('template/footer');
		}else{
			redirect(login/login);
		}
		
	}


	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password','Password','required|md5|trim');

		if($this->form_validation->run())
		{
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in'=> 1
				);

			$this->session->set_userdata($data);
			redirect('/login/members/');			
		}else{
			$this->load->view('template/header');			
			$this->load->view('LAY/login');
			$this->load->view('template/footer');
		}

	}

	public function signup_validation()
	{
		
		$this->load->library('form_validation');		

		$this->form_validation->set_rules('email','Email','required|trim|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');

		$this->form_validation->set_message('is_unique',"Ese usuario ya existe");

		if($this->form_validation->run())
		{
			$key = md5(uniqid());
			$this->load->model('model_users');
			
			if($this->model_users->add_user())
			{
								
				redirect('login/login');
				
			}else{

				echo "registro no exitoso";
				
				redirect('login/login');
			}
				

		}else{
			$this->load->view('template/header');
			$this->load->view('LAY/login');
			$this->load->view('template/footer');
		}
			
	}

	public function validate_credentials()
	{
		$this->load->model('model_users');

		if($this->model_users->can_log_in())
		{
			return true;
		}else{
			$this->form_validation->set_message('validate_credentials','Tu usuario o contraseña son incorrectos');
			return false;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/login');
	}

	public function register_user($key)
	{
		echo $key;
	}
}
