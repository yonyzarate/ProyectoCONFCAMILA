<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca extends CI_Controller { 

	private $permisos; 
	public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
		$this->load->model("marca_model");
		$this->load->library("unit_test"); 
	}
// controlador que me manda a la vista lista de marca
	public function index()
	{
		
		$data = array(
			'permisos' =>$this->permisos,
			'marca' =>$this->marca_model->getmarca()
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Marca/marca_list',$data);
        $this->load->view('layouts/footer');
		
	}
	
// controlador para agregar una nueva 
	public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Marca/marca_add_view');
        $this->load->view('layouts/footer');
		
	}

	// public function sumar($a,$b)
	// {
	// 	return $a+$b;
	// }
// 
	public function store(){
		$nombre = $this->input->post("nombre");

		$config = array(
			array(
				'field' => 'nombre',
				'label' => 'marca',
				'rules' => 'required|is_unique[marca.Nombre]',
				'errors' => array(
                    'required' => 'Debe ingresar un nombre de una %s',
                    'is_unique' => 'La %s ya existe.',
				),
			)
		);
		
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
		// 	echo "Prueba usando la libreria unit_test";
		// $test= $config;
		// $expected_result = $config;
		// $test_name="funcion guardar marca";
		// echo $this->unit->run($test,$expected_result,$test_name);
			$data = array(
				'Nombre' => $nombre,
				'Estado'=> "Activo"
			);
			if($this->marca_model->save($data)){
				redirect(base_url()."Mantenimiento/Marca");
			}
			else {
				$this->session->set_flashdata("Error","No se pudo guardar la información");
				redirect(base_url()."Mantenimiento/Marca/add");
			}
		}
		else{
			$this->add();
			// echo "Prueba usunado la libreria unit_test";
			// $test= $config;
			// $expected_result = "";
			// $test_name="funcion guardar marca";
			// echo $this->unit->run($test,$expected_result,$test_name); 
		}
	}
	public function edit($IdMarca){
		$data = array(
			'marca'=> $this->marca_model->newmarca($IdMarca)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Marca/marca_edit_view',$data);
        $this->load->view('layouts/footer');
	}
	public function update(){
		 $IdMarca = $this->input->post("IdMarca");
		 $nombre = $this->input->post("nombre");


		$MarcaActual = $this->marca_model->newmarca($IdMarca);

		if ($nombre == $MarcaActual->Nombre) {
			$unique='';
		}
		else{
			$unique ='|is_unique[marca.Nombre]';
		}
		$this->form_validation->set_rules("nombre","Nombre","required".$unique);
		if ($this->form_validation->run()) {

			$data= array(
				'Nombre' =>$nombre
			);
			if($this->marca_model->update($IdMarca,$data)){
				redirect(base_url()."Mantenimiento/Marca");
			}
			else{
				$this->session->set_flashdata("Error","No se pudo actualizar la información");
				redirect(base_url()."Mantenimiento/Marca/edit/".$IdMarca);
			}
	    }else{
			$this->edit($IdMarca);
		}
	}
	public function delete ($IdMarca){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->marca_model->update($IdMarca, $data);
		echo "Mantenimiento/Marca";
		// redirect(base_url()."Mantenimiento/Marca");
	}
}
