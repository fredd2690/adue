<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso_model extends CI_Model {
	//Esta funcion retorna todos los registros de la tabla cursos
	public function getCursos()
	{
		$this->db->where("estado","1");
		$resultados = $this->db->get("Curso");
			return $resultados->result();
	}

	public function agregarcurso($data)
	{
		return $this->db->insert('curso',$data);
	}

	public function getCurso($idCurso)
	{
		$this->db->where("idCurso",$idCurso);
		$resultado = $this->db->get("curso");
		return $resultado->row();
	}
	//
	public function update($idcurso,$data)
	{
		$this->db->where('idcurso',$idcurso);
		return $this->db->update('curso',$data);
	}

	public function deleteCurso($idcurso,$data)
	{
		$this->db->where('idcurso',$idcurso);
		return $this->db->update('curso',$data);
	}



}
