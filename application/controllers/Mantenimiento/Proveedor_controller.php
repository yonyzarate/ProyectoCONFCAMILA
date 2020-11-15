<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("proveedor_model");
        
	}
	
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'proveedor' =>$this->proveedor_model->getproveedor(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Proveedor/proveedor_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Proveedor/proveedor_add_view');
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
		$representante = $this->input->post("representante");
		$nit = $this->input->post("nit");
				
		$data = array(
			'NombreEmpresa' => $nombre,
			'RepresentanteLegal' => $representante,
			'Nit' => $nit,
			'Estado'=> "Activo"
		);
		if($this->proveedor_model->save($data)){
			redirect(base_url()."Mantenimiento/Proveedor_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Proveedor_controller/add");
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdProveedor){
		$data = array(
			'proveedor'=> $this->proveedor_model->new_proveedor($IdProveedor)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Proveedor/proveedor_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		 $IdProveedor = $this->input->post("IdProveedor");
		 $nombre = $this->input->post("nombre");
		 $representante = $this->input->post("representante");
		 $nit = $this->input->post("nit");

		$data= array(
			'NombreEmpresa' =>$nombre,
			'RepresentanteLegal' =>$representante,
			'Nit' =>$nit
		);
		if($this->proveedor_model->update($IdProveedor,$data)){
			redirect(base_url()."Mantenimiento/Proveedor_controller");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Mantenimiento/Proveedor_controller/edit/".$IdProveedor);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdProveedor){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->proveedor_model->update($IdProveedor, $data);
		echo "Mantenimiento/Proveedor_controller";
		// redirect(base_url()."Mantenimiento/Proveedor_controller");
	}
}
