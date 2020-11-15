<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoPago_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("tipopago_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'tipopago' =>$this->tipopago_model->gettipopago(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/TipoPago/tipopago_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/TipoPago/tipopago_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
				
		$data = array(
			'Nombre' => $nombre,
			'Estado'=> "Activo"
		);
		if($this->tipopago_model->save($data)){
			redirect(base_url()."Mantenimiento/TipoPago_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/TipoPago_controller/add");
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdTipopago){
		$data = array(
			'tipopago'=> $this->tipopago_model->new_tipopago($IdTipopago)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/TipoPago/tipopago_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdTipopago = $this->input->post("IdTipopago");
		$nombre = $this->input->post("nombre");

		$data= array(
			'Nombre' =>$nombre
		);
		if($this->tipopago_model->update($IdTipopago,$data)){
			redirect(base_url()."Mantenimiento/TipoPago_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/TipoPago_controller/edit/".$IdTipopago);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdTipopago){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->tipopago_model->update($IdTipopago, $data);
		echo "Mantenimiento/TipoPago_controller";
		// redirect(base_url()."Mantenimiento/Profesion_controller");
	}
}
