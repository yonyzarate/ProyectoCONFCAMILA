<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("tipo_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'tipoproducto' =>$this->tipo_model->gettipo(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Tipo/tipo_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Tipo/tipo_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
				
		$data = array(
			'Nombre' => $nombre,
			'Estado'=> "Activo"
		);
		if($this->tipo_model->save($data)){
			redirect(base_url()."Mantenimiento/Tipo_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Tipo_controller/add");
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdTipoProducto){
		$data = array(
			'tipoproducto'=> $this->tipo_model->new_tipo($IdTipoProducto)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Tipo/tipo_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdTipoProducto = $this->input->post("IdTipoProducto");
		$nombre = $this->input->post("nombre");

		$data= array(
			'Nombre' =>$nombre
		);
		if($this->tipo_model->update($IdTipoProducto,$data)){
			redirect(base_url()."Mantenimiento/Tipo_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/Tipo_controller/edit/".$IdTipoProducto);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdTipoProducto){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->tipo_model->update($IdTipoProducto, $data);
		echo "Mantenimiento/Tipo_controller";
		// redirect(base_url()."Mantenimiento/Tipo_controller");
	}
}
