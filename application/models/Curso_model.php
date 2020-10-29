<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso_model extends CI_Model {

	public function getCursos()
	{
		//$this->db->select("*");
		//$this->db->from('usuarios');
		$this->db->where("estado","1");
		$resultados = $this->db->get("Curso");
			return $resultados->result();
	}

	public function agregarcurso($data)
	{
		return $this->db->insert('usuarios',$data);
	}

	public function getCurso($idcurso)
	{
		$this->db->where("idcurso",$idcurso);
		$resultado = $this->db->get("curso");
		return $resultado->row();
	}
	//
	public function update($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		return $this->db->update('usuarios',$data);
	}

	public function deleteUsuario($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		return $this->db->update('usuarios',$data);
	}



}
