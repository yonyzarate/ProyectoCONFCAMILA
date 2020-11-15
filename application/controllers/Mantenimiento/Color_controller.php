<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Color_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("color_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'color' =>$this->color_model->getcolor(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Color/color_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Color/color_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
				
		$data = array(
			'Nombre' => $nombre,
			'Estado'=> "Activo"
		);
		if($this->color_model->save($data)){
			redirect(base_url()."Mantenimiento/Color_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Color_controller/add");
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdColor){
		$data = array(
			'color'=> $this->color_model->new_color($IdColor)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Color/color_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdColor = $this->input->post("IdColor");
		$nombre = $this->input->post("nombre");

		$data= array(
			'Nombre' =>$nombre
		);
		if($this->color_model->update($IdColor,$data)){
			redirect(base_url()."Mantenimiento/Color_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/Color_controller/edit/".$IdColor);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdColor){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->color_model->update($IdColor, $data);
		echo "Mantenimiento/Color_controller";
		// (base_url()."Mantenimiento/Color_controller");
	}
}
