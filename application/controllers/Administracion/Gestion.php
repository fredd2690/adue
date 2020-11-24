<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model("Gestion_model");
  }

	public function index()
	{
    $data = array (
      'gestiones' => $this->Gestion_model->getGestiones(),
    );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/gestion/list', $data );
		$this->load->view('layouts/footer');
  }

  public function add()
	{
    $this->load->view('layouts/header');
  	$this->load->view('layouts/aside');
		$this->load->view('admin/gestion/add');
    $this->load->view('layouts/footer');
  }
  //
  public function agregardb()
	{
    
    $nombre = $this->input->post("nombre");
    $str_fecha_inicio = $this->input->post("fechaInicio");
    $str_fecha_cierre = $this->input->post("fechaCierre");

    $fechaInicio = date('Y-m-d',strtotime($str_fecha_inicio));
    $fechaCierre = date('Y-m-d',strtotime($str_fecha_cierre));
    

    $data = array('nombre' => $nombre,
                  'fechaInicio'=>$fechaInicio,
                  'fechaCierre'=>$fechaCierre,
                );
    if ($this->Gestion_model->agregarGestion($data)) {
       redirect("Administracion/Gestion/index");
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
      
      $str_fecha_inicio = $this->input->post("fechaInicio");
      $str_fecha_cierre = $this->input->post("fechaCierre");

      $fechaInicio = date('Y-m-d',strtotime($str_fecha_inicio));
      $fechaCierre = date('Y-m-d',strtotime($str_fecha_cierre));


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
  public function delete($id)
    {
      $data['estado']='0';
      //$data = array('usuario' => $this->Usuarios_model->deleteUsuario($idusuario,$data));

      //$this->load->view('layouts/header');
      //$this->load->view('layouts/aside');
    	//$this->load->view('admin/usuarios/',$data);
      //$this->load->view('layouts/footer');


      if ($this->Gestion_model->delete($id,$data)) {
        redirect("Administracion/Gestion/index");
     }else {
       $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
       redirect(base_url()."/Administracion/Gestion");
     }
    }





}
