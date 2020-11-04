<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model("Estudiante_model");
  }

	public function index()
	{
    $data = array (
      'estudiantes' => $this->Estudiante_model->getEstudiantes(),
    );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/estudiante/list', $data );
		$this->load->view('layouts/footer');
  }

  public function add()
  {
      $this->load->view('layouts/header');
    	$this->load->view('layouts/aside');
      $this->load->view('admin/estudiante/add');
      $this->load->view('layouts/footer');
  }
  //
  // public function agregardb()
  // {
  //   $curso = $this->input->post("nombre");
  //   $seccion = $this->input->post("seccion");
  //   $tutor =$this->input->post("tutor");
  //   $data = array('nombre' => $curso,
  //                 'seccion'=>$seccion,
  //                 'tutor'=>$tutor,
  //               );
  //   if ($this->Curso_model->agregarcurso($data)) {
  //      redirect("Curso/Curso/index");
  //   }else {
  //     $this->session->set_flashdata("error","No se pudo guardar la informacion");
  //     redirect(base_url()."/Curso/Curso/add");
  //   }
  // }
  //
  //
  // public function edit($idcurso)
  //   {
  //     $data = array('curso' => $this->Curso_model->getCurso($idcurso));
  //
  //     //$this->load->view('layouts/header');
  //     //$this->load->view('layouts/aside');
  //   	$this->load->view('admin/curso/edit',$data);
  //   	//$this->load->view('layouts/footer');
  //   }
  //
  // public function view($idCurso)
  //   {
  //     $data = array('curso' => $this->Curso_model->getCurso($idCurso));
  //
  //     //$this->load->view('layouts/header');
  //     //$this->load->view('layouts/aside');
  //   	$this->load->view('admin/curso/view',$data);
  //   	//$this->load->view('layouts/footer');
  //   }
  //
  // public function updatedb()
  //   {
  //     $idcurso = $this->input->post("idcurso");
  //     $nombre = $this->input->post("nombre");
  //     $seccion = $this->input->post("seccion");
  //     $tutor =$this->input->post("tutor");
  //
  //
  //     $data = array('idcurso' => $idcurso,
  //                   'nombre'=>$nombre,
  //                   'seccion'=>$seccion,
  //                   'tutor'=>$tutor,
  //                 );
  //     if ($this->Curso_model->update($idcurso,$data)) {
  //        redirect("Curso/Curso/index");
  //     }else {
  //       $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
  //       redirect(base_url()."/Curso/curso/edit".$idcurso);
  //     }
  //
  //   }
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
