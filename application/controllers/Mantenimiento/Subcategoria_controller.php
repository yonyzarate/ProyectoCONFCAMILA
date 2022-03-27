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
                'rules' => 'required',
                'errors' => array(
                    'required' => 'el %s es importante',
                    // 'is_unique' => 'el %s ya existe',
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
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdSubcategoria){
		$data = array(
            'categoria' =>$this->categoria_model->getcategoria(),
            'subcategoria'=>$this->subcategoria_model->new_subcategoria($IdSubcategoria)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Subcategoria/subcategoria_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    public function update(){
        $IdSubcategoria=$this->input->post("IdSubcategoria");
        $nombresub = $this->input->post("nombresub");
        $categoria = $this->input->post("categoria");

        $SubcategoriaActual = $this->subcategoria_model->new_subcategoria($IdSubcategoria);
        if ($nombresub == $SubcategoriaActual->Nombre) {
			$uniquenom='';
		}
		else{
			$uniquenom ='|is_unique[subcategoria.Nombre]';
        } 
        $config = array(
            array(
                'field' => 'nombresub',
                'label' => 'categoria',
                'rules' => 'required'.$uniquenom,
                'errors' => array(
                    'required' => 'Debe ingresar el nombre de %s',
                    'is_unique' => 'El nombre de la  %s ya pertenece a un registro.',
                ),
            ),
        );
        $this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {     
           
            $data = array(

                'Nombre' => $nombresub,
                'IdCategoria'=>$categoria 

            );
            if($this->subcategoria_model->update($IdSubcategoria,$data)){
                redirect(base_url()."Mantenimiento/Subcategoria_controller");
            }
            else {
                $this->session->set_flashdata("Error","No se pudo guardar la información");
                redirect(base_url()."Mantenimiento/Subcategoria_controller/edit/".$IdSubcategoria);
            }
      
        }else{
            $this->edit($IdSubcategoria);
        }
    }
    // funcion para eliminar un registro
    public function delete($IdSubcategoria){
        $this->subcategoria_model->delete($IdSubcategoria);
        redirect(base_url()."Mantenimiento/Subcategoria_controller");
    }

}