<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_controller extends CI_Controller { 

	private $permisos; 
	public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
		$this->load->model("modelo_model");
		$this->load->library("unit_test"); 
	}
// controlador que me manda a la vista lista de modelo
	public function index()
	{
		
		$data = array(
			'permisos' =>$this->permisos,
			'modelo' =>$this->modelo_model->getmodelo()
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Modelo/modelo_list',$data);
        $this->load->view('layouts/footer');
		
	}
	
// controlador para agregar una nueva 
	public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Modelo/modelo_add_view');
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
				'label' => 'modelo',
				'rules' => 'required|is_unique[modelo.Nombre]',
				'errors' => array(
                    'required' => 'Debe ingresar un nombre de un %s',
                    'is_unique' => 'EL %s ya existe.',
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
			if($this->modelo_model->save($data)){
				redirect(base_url()."Mantenimiento/Modelo_controller");
			}
			else {
				$this->session->set_flashdata("Error","No se pudo guardar la información");
				redirect(base_url()."Mantenimiento/Modelo_controller/add");
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
	public function edit($IdModelo){
		$data = array(
			'modelo'=> $this->modelo_model->newmodelo($IdModelo)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Modelo/modelo_edit_view',$data);
        $this->load->view('layouts/footer');
	}
	public function update(){
		 $IdModelo = $this->input->post("IdModelo");
		 $nombre = $this->input->post("nombre");


		$ModeloActual = $this->modelo_model->newmodelo($IdModelo);

		if ($nombre == $ModeloActual->Nombre) {
			$unique='';
		}
		else{
			$unique ='|is_unique[modelo.Nombre]';
		}
		$this->form_validation->set_rules("nombre","Nombre","required".$unique);
		if ($this->form_validation->run()) {

			$data= array(
				'Nombre' =>$nombre
			);
			if($this->modelo_model->update($IdModelo,$data)){
				redirect(base_url()."Mantenimiento/Modelo_controller");
			}
			else{
				$this->session->set_flashdata("Error","No se pudo actualizar la información");
				redirect(base_url()."Mantenimiento/Modelo_controller/edit/".$IdModelo);
			}
	    }else{
			$this->edit($IdModelo);
		}
	}
	public function delete ($IdModelo){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->modelo_model->update($IdModelo, $data);
		echo "Mantenimiento/Modelo_controller";
		// redirect(base_url()."Mantenimiento/Marca");
	}
}
