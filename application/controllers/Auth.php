<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	  public function __construct(){
	 	parent::__construct();
		$this->load->model("Auth_model");
		}

	public function index()
	{
		//estas lineas controlan si el usuario esta logueado
		if($this->session->userdata("login"))
		{
			redirect(base_url()."dashboard");
		}else{
			$this->load->view("admin/login");
		}

	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$res= $this->Auth_model->login($username, md5($password));

		if(!$res)
		{
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}else {
					$data = array(
					'id' =>$res->idusuario,
				 	'nombre'=>$res->nombres,
					'rol'=>$res->idrol,
					'login'=>TRUE
					);
					$this->session->set_userdata($data);
					redirect(base_url()."dashboard");
				//	redirect(dashboard/index);
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}


}
