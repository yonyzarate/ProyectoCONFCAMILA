<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nacionalidad_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("nacionalidad_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'nacionalidad' =>$this->nacionalidad_model->getnacional(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Nacionalidad/nacionalidad_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Nacionalidad/nacionalidad_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
				
		$data = array(
			'Nombre' => $nombre,
			'Estado'=> "Activo"
		);
		if($this->nacionalidad_model->save($data)){
			redirect(base_url()."Mantenimiento/Nacionalidad_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Nacionalidad_controller/add");
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdNacionalidad){
		$data = array(
			'nacionalidad'=> $this->nacionalidad_model->new_nacional($IdNacionalidad)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Nacionalidad/nacionalidad_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdNacionalidad = $this->input->post("IdNacionalidad");
		$nombre = $this->input->post("nombre");

		$data= array(
			'Nombre' =>$nombre
		);
		if($this->nacionalidad_model->update($IdNacionalidad,$data)){
			redirect(base_url()."Mantenimiento/Nacionalidad_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/Nacionalidad_controller/edit/".$IdNacionalidad);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdNacionalidad){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->nacionalidad_model->update($IdNacionalidad, $data);
		echo "Mantenimiento/Nacionalidad_controller";
		// redirect(base_url()."Mantenimiento/Nacionalidad_controller");
	}
}
