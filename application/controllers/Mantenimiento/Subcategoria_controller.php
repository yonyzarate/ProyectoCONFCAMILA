<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategoria_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("subcategoria_model");
        $this->load->model("categoria_model");
        
    }
    
    /// controlador para llamar  
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'subcategoria' =>$this->subcategoria_model->getsubcategoria(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Subcategoria/subcategoria_list_view',$data);
        $this->load->view('layouts/footer');
    }
    // controlador  que me manda a la vista  nuevo  
	public function add()
	{
        $data = array(
			'categoria' =>$this->categoria_model->getcategoria(),
		);
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Subcategoria/subcategoria_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
}