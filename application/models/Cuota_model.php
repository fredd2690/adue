<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuota_model extends CI_Model {
	//Esta funcion retorna todos los registros de la tabla cursos
	public function getCuotas()
	{
		$this->db->select("c.*,g.*");
		$this->db->from("cuota c");
		$this->db->join("gestion g", "c.idGestion = g.idGestion");
		$this->db->where("c.estado<","2");
		$resultados = $this->db->get();
			return $resultados->result();
	}

	public function agregarCuota($data)
	{
		return $this->db->insert('cuota',$data);
	}
	//
	public function getCuota($idCuota)
	{
		$this->db->where("idCuota",$idCuota);
		$resultado = $this->db->get("cuota");
		return $resultado->row();
	}
	// //
	public function update($idCuota,$data)
	{
		$this->db->where('idCuota',$idCuota);
		return $this->db->update('cuota',$data);
	}

	// public function deleteCurso($idcurso,$data)
	// {
	// 	$this->db->where('idcurso',$idcurso);
	// 	return $this->db->update('curso',$data);
	// }



}
