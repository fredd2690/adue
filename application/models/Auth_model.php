<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login($username,$password)
	{
		//las siguientes dos lineas no son necesarias.
		//$this->db->select("*");no es necesraio esta linea
		//$this->db->from('usuarios');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('estado',1);

		$resultados = $this->db->get("usuario");

		if($resultados->num_rows()>0)
		{
			return $resultados->row();
		}else{
			return false;
		}
	}
}
