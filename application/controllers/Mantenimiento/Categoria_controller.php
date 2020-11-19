<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_controller extends CI_Controller {

	private $permisos;
	public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
		$this->load->model("categoria_model");
	}
// controlador que me manda a la vista lista
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
    //funcion que nos sirve poder redireccionar a la nueva vista donde se podra guardar una nueva categoria 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Categoria/categoria_add_view');
        $this->load->view('layouts/footer');
		
    }
    // funcion para guardar la nueva categoria 
    public function store(){
		$nombre = $this->input->post("nombre");

		$config = array(
			array(
				'field' => 'nombre',
				'label' => 'categoria',
				'rules' => 'required|is_unique[categoria.Nombre]',
				'errors' => array(
                    'required' => 'Debe ingresar un nombre de una %s',
                    'is_unique' => 'La %s ya existe.',
				),
			)
		);
		
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
	
			$data = array(
				'Nombre' => $nombre,
			);
			if($this->categoria_model->save($data)){
				redirect(base_url()."Mantenimiento/Categoria_controller");
			}
			else {
				$this->session->set_flashdata("Error","No se pudo guardar la información");
				redirect(base_url()."Mantenimiento/Categoria_controller/add");
			}
		}
		else{
			$this->add();
		}
    }
    // estaa funcion nos redirige a la vista de editar 
    public function edit($IdCategoria){
		$data = array(
			'categoria'=> $this->categoria_model->new_categoria($IdCategoria)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Categoria/categoria_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // función para poder editar el registro de categoria
    public function update(){
        $IdCategoria = $this->input->post("IdCategoria");
        $nombre = $this->input->post("nombre");


       $CategoriaActual = $this->categoria_model->new_categoria($IdCategoria);

       if ($nombre == $CategoriaActual->Nombre) {
           $unique='';
       }
       else{
           $unique ='|is_unique[categoria.Nombre]';
       }
       $this->form_validation->set_rules("nombre","Nombre","required".$unique);
       if ($this->form_validation->run()) {

           $data= array(
               'Nombre' =>$nombre
           );
           if($this->categoria_model->update($IdCategoria,$data)){
               redirect(base_url()."Mantenimiento/Categoria_controller");
           }
           else{
               $this->session->set_flashdata("Error","No se pudo actualizar la información");
               redirect(base_url()."Mantenimiento/Categoria_controller/edit/".$IdCategoria);
           }
       }else{
           $this->edit($IdCategoria);
       }
   }
   public function delete($IdCategoria){
       $this->categoria_model->delete($IdCategoria);
       redirect(base_url()."Mantenimiento/Categoria_controller");
   }
}
?>