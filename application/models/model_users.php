<?php

class Model_users extends CI_Model
{
	public function can_log_in()
	{
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',this->input->post('password'));
		$query= $this->db->get('users');

		if($query->num_rows() == 1)
		{
			return true;
		}else{
			return false;
		}
	}


	public function add_user()
	{
		$data = array(
			'email' => $this->input->post('email'),			
			'password' => $this->input->post('password');

		$q= $this->db->insert('users',$data);

		if($q)
		{
			return true;
		}else{
			return false;
		}

	}
}