<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesion_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("profesion_model");
        
	}
	
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'profesion' =>$this->profesion_model->getprofesion(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Profesion/profesion_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Profesion/profesion_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
				
		$data = array(
			'Nombre' => $nombre,
			'Estado'=> "Activo"
		);
		if($this->profesion_model->save($data)){
			redirect(base_url()."Mantenimiento/Profesion_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Profesion_controller/add");
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdProfesion){
		$data = array(
			'profesion'=> $this->profesion_model->new_profesion($IdProfesion)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Profesion/profesion_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdProfesion = $this->input->post("IdProfesion");
		$nombre = $this->input->post("nombre");

		$data= array(
			'Nombre' =>$nombre
		);
		if($this->profesion_model->update($IdProfesion,$data)){
			redirect(base_url()."Mantenimiento/Profesion_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/Profesion_controller/edit/".$IdProfesion);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdProfesion){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->profesion_model->update($IdProfesion, $data);
		echo "Mantenimiento/Profesion_controller";
		// redirect(base_url()."Mantenimiento/Profesion_controller");
	}
}
