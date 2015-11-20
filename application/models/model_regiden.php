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

	public function add_denuncia()
	{
		//Dirección
		//Ciudadano
		//Asunto
		$dataCiudadano = array(
			'nombre' => $this->input->post('nombre'),
			'apellidoPa' => $this->input->post('apellidoPa'),
			'apellidoMa' => $this->input->post('apellidoMa'),
			'tel1' => $this->input->post('tel1'),
			'tel2' => $this->input->post('tel2')
		);

		$q1= $this->db->insert('ciudadanos',$dataCiudadano);
		$qc = $this->db->insert_id();

		$dataDireccion = array(
			'calle' => $this->input->post('calle'),
			'noExt' => $this->input->post('noExt'),
			'noInt' => $this->input->post('noInt'),
			'colonia' => $this->input->post('colonia'),
			'cp' => $this->input->post('cp'),
			'localidad' => $this->input->post('localidad')
		);

		$q2= $this->db->insert('direcciones',$dataDireccion);
		$qd = $this->db->insert_id();

		$dataAsuntos = array(
			'descripcion' => $this->input->post('descripcion')
			);
		
		$q4= $this->db->insert('asuntos',$dataAsuntos);
		$qa = $this->db->insert_id();


		$dataDenuncias = array(
			'fecha' => $this->input->post('fecha'),
			'idDependencia' => $this->input->post('idDependencia'),
			'estatus' => $this->input->post('estatus'),
			'recepcion' => $this->input->post('recepcion'),
			'idCiudadano' => $qc,
			'idDireccion' => $qd,
			'idAsunto' => $qa			
			);

		

				
		
		$q3= $this->db->insert('denuncias',$dataDenuncias);
		

		if($q1)
		{
			if($q2)
			{
				if($q3)
				{
					if($q4)
					{
						return true;		
					} else{
						return false;			
					}					
				}
				
			}			
		}

	}

	public function buscar($query)
	{
		$this->db->like('nombre',$query);
		$query= $this->db->get('ciudadanos');
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;	
		}
	}
	
}