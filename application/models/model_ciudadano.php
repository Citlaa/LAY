<?php

class Model_ciudadano extends CI_Model
{
	public function show_all()
	{
		$query= $this->db->get('ciudadanos');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}
	}


	public function show_ciudadano()
	{
		$this->db->select('*');
		$this->db->from('ciudadanos c');
		$query= $this->db->get('ciudadanos');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}
	}

	public function get_ciudadano($id)
	{
		
	}

}
