<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Combo_model extends CI_Model {
	//Esta funcion retorna todos los registros de la tabla cursos
	public function comboTabla($tabla)
	{
		$this->db->where("estado","1");
		$resultados = $this->db->get($tabla);
			return $resultados->result();
	}

	public function estudiantePersonaCurso()
	{
		$this->db->select("e.*,c.*");
		$this->db->from("estudiante e");
		$this->db->join("curso c", "e.idcurso = c.idcurso");
		$this->db->where("e.estado","1");
		$resultados = $this->db->get();
			return $resultados->result();
	}

	// public function agregarcurso($data)
	// {
	// 	return $this->db->insert('curso',$data);
	// }
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
