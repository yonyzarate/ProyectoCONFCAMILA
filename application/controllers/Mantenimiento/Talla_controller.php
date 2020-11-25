<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talla_controller extends CI_Controller {

	private $permisos;
	public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
		$this->load->model("talla_model");
	}
    // controlador que me manda a la vista lista de tallas
	public function index()
	{
		$data = array(
			'permisos' =>$this->permisos,
			'talla' =>$this->talla_model->gettalla()
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Talla/talla_list_view',$data);
        $this->load->view('layouts/footer');
		
    }
    // controlador para agregar una nueva 
	public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Talla/talla_add_view');
        $this->load->view('layouts/footer');
		
    }
    public function store(){
		$nombre = $this->input->post("nombre");

		$config = array(
			array(
				'field' => 'nombre',
				'label' => 'talla',
				'rules' => 'required|is_unique[talla.Nombre]',
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
				'Estado'=> "Activo"
			);
			if($this->talla_model->save($data)){
				redirect(base_url()."Mantenimiento/Talla_controller");
			}
			else {
				$this->session->set_flashdata("Error","No se pudo guardar la información");
				redirect(base_url()."Mantenimiento/Talla_controller/add");
			}
		}
		else{
			$this->add();
		}
    }
    public function edit($IdTalla){
		$data = array(
			'talla'=> $this->talla_model->new_talla($IdTalla)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Talla/talla_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    
    public function update(){
        $IdTalla = $this->input->post("IdTalla");
        $nombre = $this->input->post("nombre");


       $TallaActual = $this->talla_model->new_talla($IdTalla);

       if ($nombre == $TallaActual->Nombre) {
           $unique='';
       }
       else{
           $unique ='|is_unique[talla.Nombre]';
       }
       $this->form_validation->set_rules("nombre","Nombre","required".$unique);
       if ($this->form_validation->run()) {

           $data= array(
               'Nombre' =>$nombre
           );
           if($this->talla_model->update($IdTalla,$data)){
               redirect(base_url()."Mantenimiento/Talla_controller");
           }
           else{
               $this->session->set_flashdata("Error","No se pudo actualizar la información");
               redirect(base_url()."Mantenimiento/Talla_controller/edit/".$IdTalla);
           }
       }else{
           $this->edit($IdTalla);
       }
   }

   public function delete ($IdTalla){
    $data = array(
        'Estado' =>"Inactivo",
    );
    $this->talla_model->update($IdTalla, $data);
    echo "Mantenimiento/Talla_controller";
    // redirect(base_url()."Mantenimiento/Marca");
}
}