<?php

class Model_regiden extends CI_Model
{
	public function ver_dependencias()
	{

		$query= $this->db->get('dependencias');

		if($query->num_rows()>0)
		{
			return $query;
		}else{
			return false;
		}

	}
	
}