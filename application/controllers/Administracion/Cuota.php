<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuota extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model("Cuota_model");
  }

	public function index()
	{
    $data = array (
      'cuotas' => $this->Cuota_model->getCuotas(),
    );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/cuota/list', $data );
		$this->load->view('layouts/footer');
  }

  public function add()
	{
    $this->load->view('layouts/header');
  	$this->load->view('layouts/aside');
		$this->load->view('admin/cuota/add');
    $this->load->view('layouts/footer');
  }
  //
  public function agregardb()
	{
    $concepto = $this->input->post("concepto");
    $precio = $this->input->post("precio");
    $gestion =$this->input->post("gestion");
    $data = array('concepto' => $concepto,
                  'precio'=>$precio,
                  'idGestion'=>$gestion,
                );
    if ($this->Cuota_model->agregarCuota($data)) {
       redirect("Administracion/Cuota/index");
    }else {
      $this->session->set_flashdata("error","No se pudo guardar la informacion");
      redirect(base_url()."Administracion/Gestion/add");
    }
  }
  //
  //
  public function edit($idGestion)
    {
      $data = array('gestion' => $this->Gestion_model->getGestion($idGestion));

      $this->load->view('layouts/header');
      $this->load->view('layouts/aside');
    	$this->load->view('admin/gestion/edit',$data);
    	$this->load->view('layouts/footer');
    }
  //
  public function view($idGestion)
    {
      $data = array('gestion' => $this->Gestion_model->getGestion($idGestion));

      //$this->load->view('layouts/header');
      //$this->load->view('layouts/aside');
    	$this->load->view('admin/gestion/view',$data);
    	//$this->load->view('layouts/footer');
    }
  //
  public function updatedb()
    {
      $idgestion = $this->input->post("idGestion");
      $nombre = $this->input->post("nombre");
      $fechaInicio = $this->input->post("fechaInicio");
      $fechaCierre =$this->input->post("fechaCierre");


      $data = array( "idGestion"=>$idgestion,
                    'nombre'=>$nombre,
                    'fechaInicio'=>$fechaInicio,
                    'fechaCierre'=>$fechaCierre,
                  );
      if ($this->Gestion_model->update($idgestion,$data)) {
         redirect("Administracion/gestion/index");
      }else {
        $this->session->set_flashdata("error","No se pudo Actualizar la informacion");
        redirect(base_url()."Administracion/gestion/edit".$idGestion);
      }

    }
  //
  // public function delete($idcurso)
  //   {
  //     $data['estado']='0';
  //     //$data = array('usuario' => $this->Usuarios_model->deleteUsuario($idusuario,$data));
  //
  //     //$this->load->view('layouts/header');
  //     //$this->load->view('layouts/aside');
  //   	//$this->load->view('admin/usuarios/',$data);
  //     //$this->load->view('layouts/footer');
  //
  //
  //     if ($this->Curso_model->deleteCurso($idcurso,$data)) {
  //       redirect("Curso/Curso/index");
  //    }else {
  //      $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
  //      redirect(base_url()."/Curso/Curso/");
  //    }
  //   }





}
