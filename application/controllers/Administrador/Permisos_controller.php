<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_controller extends CI_Controller {
    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("permisos_model");
        $this->load->model("roles_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index(){
		$data  = array(
            'permiso' =>$this->permisos,
			'permisos' => $this->permisos_model->getPermisos()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Permisos/permisos_list_view",$data);
		$this->load->view("layouts/footer");
	}


    public function add()
	{
        $data = array(
			'roles' =>$this->roles_model->getroles(),
            'menu' =>$this->permisos_model->getmenu()
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Permisos/permisos_add_view',$data);
        $this->load->view('layouts/footer');
    }
    public function store (){
        $menu = $this->input->post("menu");
        $rol =$this->input->post("rol");
        $leer = $this->input->post("leer");
        $insertar = $this->input->post("insertar");
        $actualizar = $this->input->post("actualizar");
        $eliminar = $this->input->post("eliminar");

        $data = array(
            'IdMenu'=> $menu,
            'IdRol'=> $rol,
            'Leer'=> $leer,
            'Insertar'=> $insertar,
            'Actualizar'=> $actualizar,
            'Eliminar'=> $eliminar,
            'Estado'=> "Activo"
        );
        if($this->permisos_model->save($data)){
            redirect(base_url()."Administrador/Permisos_controller");
        }
        else{
            $this->session->set_flashdata("Error","No se pudo guardar la información");
            redirect(base_url()."Administrador/Permisos_controller/add");
        }
    }

    public function edit($IdPermiso){
        $data = array(
			'roles' =>$this->roles_model->getroles(),
            'menu' =>$this->permisos_model->getmenu(),
            'permisos' =>$this->permisos_model->new_permisos($IdPermiso)
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Permisos/permisos_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    public function update(){
        $IdPermiso = $this->input->post("IdPermiso");
        $menu = $this->input->post("menu");
        $rol =$this->input->post("rol");
        $leer = $this->input->post("leer");
        $insertar = $this->input->post("insertar");
        $actualizar = $this->input->post("actualizar");
        $eliminar = $this->input->post("eliminar");

        $data = array(
            'Leer'=> $leer,
            'Insertar'=> $insertar,
            'Actualizar'=> $actualizar,
            'Eliminar'=> $eliminar,
        ); 
        if($this->permisos_model->update($IdPermiso,$data)){
            redirect(base_url()."Administrador/Permisos_controller");
        }
        else{
            $this->session->set_flashdata("Error","No se pudo guardar la información");
            redirect(base_url()."Administrador/Permisos_controller/edit".$IdPermiso);
        }
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdColor){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->permisos_model->update($IdColor, $data);
		echo "Administrador/Permisos_controller";
		// (base_url()."Mantenimiento/Color_controller");
	}

}