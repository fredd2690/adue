<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model("Curso_model");
  }

	public function index()
	{
  //  $data = array (
    //  'curso' => $this->Curso_model->getCurso(),
    //);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/curso/list' );//,$data);
		$this->load->view('layouts/footer');
  }

  public function add()
	{
    $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/add');
		$this->load->view('layouts/footer');
  }

  public function agregardb()
	{
    $nombre = $this->input->post("nombre");
    $apellido = $this->input->post("apellido");
    $email =$this->input->post("email");
    $username =$this->input->post("username");
    $password =$this->input->post("password");
    $idrol = $this->input->post("idrol");
    //echo $nombre." ".$apellido." ".$idrol;
    $data = array('nombres' => $nombre,
                  'apellidos'=>$apellido,
                  'email'=>$email,
                  'username'=>$username,
                  'password'=>md5($password),
                  'idrol'=>$idrol,
                );
    if ($this->Usuarios_model->agregarusuario($data)) {
       redirect("Administrador/usuarios/index");
    }else {
      $this->session->set_flashdata("error","No se pudo guardar la informacion");
      redirect(base_url()."/Administrador/usuarios/add");
    }
  }


  public function edit($idusuario)
    {
      $data = array('usuario' => $this->Usuarios_model->getUsuario($idusuario),);

      $this->load->view('layouts/header');
      $this->load->view('layouts/aside');
    	$this->load->view('admin/usuarios/edit',$data);
    	$this->load->view('layouts/footer');
    }

  public function view($idusuario)
    {
      $data = array('usuario' => $this->Usuarios_model->getUsuario($idusuario),);

      //$this->load->view('layouts/header');
      //$this->load->view('layouts/aside');
    	$this->load->view('admin/usuarios/view',$data);
    	//$this->load->view('layouts/footer');
    }

  public function updatedb()
    {
      $idusuario = $this->input->post("idusuario");
      $nombre = $this->input->post("nombre");
      $apellido = $this->input->post("apellido");
      $email =$this->input->post("email");
      $username =$this->input->post("username");
      $password =$this->input->post("password");
      $idrol = $this->input->post("idrol");

      $data = array('idusuario' => $idusuario,
                    'nombres'=>$nombre,
                    'apellidos'=>$apellido,
                    'email'=>$email,
                    'username'=>$username,
                    'password'=>md5($password),
                    'idrol'=>$idrol,
                  );
      if ($this->Usuarios_model->update($idusuario,$data)) {
         redirect("Administrador/usuarios/index");
      }else {
        $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
        redirect(base_url()."/administrador/usuarios/edit".$idusuario);
      }

    }

  public function delete($idusuario)
    {
      $data['estado']='0';
      //$data = array('usuario' => $this->Usuarios_model->deleteUsuario($idusuario,$data));

      //$this->load->view('layouts/header');
      //$this->load->view('layouts/aside');
    	//$this->load->view('admin/usuarios/',$data);
      //$this->load->view('layouts/footer');


      if ($this->Usuarios_model->deleteUsuario($idusuario,$data)) {
        redirect("Administrador/usuarios/index");
     }else {
       $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
       redirect(base_url()."/administrador/usuarios/");
     }
    }





}
