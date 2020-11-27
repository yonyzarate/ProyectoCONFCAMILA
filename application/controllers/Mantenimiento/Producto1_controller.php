<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto1_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("producto1_model");
        $this->load->model("color_model");
        $this->load->model("talla_model");
        $this->load->model("subcategoria_model");
        $this->load->model("categoria_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'producto' =>$this->producto1_model->getproducto(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto1/producto1_list_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
        $data = array(
            'color' =>$this->color_model->getcolor(),
            'talla' =>$this->talla_model->gettalla(),
            'categoria' =>$this->categoria_model->getcategoria(),
            

        );
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto1/producto1_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
    public function fetchSubcategoria(){
        echo "Llego hasta aqui!";
        // if($this->input->post('IdCategoria')){
        //     echo $this->producto1_model->fetch_subcategoria($this->input->post('IdCategoria'));
        // }
        // $IdCategoria = $this->input->post("IdCategoria");
        // $data= array(
        //     echo $this->producto1_model->fetch_subcategoria($IdCategoria)
        // );
        // $this->load->view('layouts/header');
        // $this->load->view('layouts/aside');
        // $this->load->view('admin/Producto1/producto1_add_view',$data);
        // $this->load->view('layouts/footer');
    }
}