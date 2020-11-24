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
     // Controlador que recoge datos de las consultas de model para insert un nuevo 
    public function store(){
       
        $nombresub = $this->input->post("nombresub");
        $categoria = $this->input->post("categoria");
        
        $config = array(
            array(
                'field' => 'nombresub',
                'label' => 'nombre de subcategoria',
                'rules' => 'required|is_unique[subcategoria.Nombre]',
                'errors' => array(
                    'required' => 'el %s es importante',
                    'is_unique' => 'el %s ya existe',
                ),
            ),
           
        );
        $this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
		    $data = array(

                'Nombre' => $nombresub,
                'IdCategoria'=>$categoria,
		    );
		    if($this->subcategoria_model->save($data)){
		    	redirect(base_url()."Mantenimiento/Subcategoria_controller");
		    }
		    else {
		    	$this->session->set_flashdata("Error","No se pudo guardar la información");
		    	redirect(base_url()."Mantenimiento/Subcategoria_controller/add");
            }
        }else{
            $this->add();
        }
    }
}