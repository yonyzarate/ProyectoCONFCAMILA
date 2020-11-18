<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_controller extends CI_Controller {

	private $permisos;
	public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
		$this->load->model("categoria_model");
	}
// controlador que me manda a la vista lista de marca
	public function index()
	{
		$data = array(
			'permisos' =>$this->permisos,
			'categoria' =>$this->categoria_model->getcategoria()
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Categoria/categoria_list',$data);
        $this->load->view('layouts/footer');
		
    }
}
?>