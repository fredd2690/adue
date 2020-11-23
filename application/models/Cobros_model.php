<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobros_model extends CI_Model {
	//Esta funcion retorna todos los registros de la tabla cursos
	public function getCobros()
	{
		$this->db->select("e.*,d.*,c.*");
		$this->db->from("estudiante e");
		$this->db->join("curso c", "c.idCurso = e.idCurso");
		$this->db->join("detalledepago d", "e.idEstudiante = d.idEstudiante");
		$this->db->join("cuota c", "d.idCuota = c.idCuota");
		$this->db->where("e.estado","1");
		$resultados = $this->db->get();
			return $resultados->result();
	}

	//El isguiente metodo es para llenar el boton añadir
	public function getCuota($valor){
		$this->db->select("idCuota as id,concepto,precio");
		$this->db->from("cuota");
		$this->db->like("nombre",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
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
