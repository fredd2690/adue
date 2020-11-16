<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {
	//Esta funcion retorna todos los registros de la tabla cursos
	public function getEstudiantes()
	{
		$this->db->select("e.*,c.*");
		$this->db->from("estudiante e");
		$this->db->join("curso c", "e.idCurso= c.idCurso");
		$this->db->where("e.estado","1");
		$resultados = $this->db->get();
			return $resultados->result();
	}

	public function insertar($data)
	{
		return $this->db->insert('estudiante',$data);
	}
	//
	// public function getCurso($idCurso)
	// {
	// 	$this->db->where("idCurso",$idCurso);
	// 	$resultado = $this->db->get("curso");
	// 	return $resultado->row();
	// }
	// //
	// public function update($idcurso,$data)
	// {
	// 	$this->db->where('idcurso',$idcurso);
	// 	return $this->db->update('curso',$data);
	// }
	//
	// public function deleteCurso($idcurso,$data)
	// {
	// 	$this->db->where('idcurso',$idcurso);
	// 	return $this->db->update('curso',$data);
	// }



}
