<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion_model extends CI_Model {
	//Esta funcion retorna todos los registros de la tabla cursos
	public function getGestiones()
	{
		$this->db->where("estado<","2");
		$resultados = $this->db->get("gestion");
			return $resultados->result();
	}

	public function agregarGestion($data)
	{
		return $this->db->insert('gestion',$data);
	}
	//
	public function getGestion($idGestion)
	{
		$this->db->where("idGestion",$idGestion);
		$resultado = $this->db->get("gestion");
		return $resultado->row();
	}
	// //
	public function update($idGestion,$data)
	{
		$this->db->where('idGestion',$idGestion);
		return $this->db->update('gestion',$data);
	}

	// public function deleteCurso($idcurso,$data)
	// {
	// 	$this->db->where('idcurso',$idcurso);
	// 	return $this->db->update('curso',$data);
	// }



}
