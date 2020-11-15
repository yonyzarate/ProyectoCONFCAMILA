<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("roles_model");
        
    }
	/// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'rol' =>$this->roles_model->getroles(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Roles/roles_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Roles/roles_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
				
		$data = array(
			'Nombre' => $nombre,
			'Estado'=> "Activo"
		);
		if($this->roles_model->save($data)){
			redirect(base_url()."Mantenimiento/Roles_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Roles_controller/add");
		}
    }

      // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
      public function edit($IdRol){
		$data = array(
			'rol'=> $this->roles_model->new_roles($IdRol)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Roles/roles_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdRoles = $this->input->post("IdRoles");
		$nombre = $this->input->post("nombre");

		$data= array(
			'Nombre' =>$nombre
		);
		if($this->roles_model->update($IdRoles,$data)){
			redirect(base_url()."Mantenimiento/Roles_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/Roles_controller/edit/".$IdRoles);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdRol){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->roles_model->update($IdRol, $data);
		echo "Mantenimiento/Roles_controller";
		// redirect(base_url()."Mantenimiento/Roles_controller");
	}
}
