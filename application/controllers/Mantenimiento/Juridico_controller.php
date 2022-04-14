<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juridico_controller extends CI_Controller {

	private $permisos;
    public function __construct(){
		parent:: __construct();
		$this->permisos =$this->backend_lib->control();
        $this->load->model("cliente_model");
        
	}
	
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'juridico' =>$this->cliente_model->getjuridico(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Juridico/juridico_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		$data = array(
			'tipocliente' =>$this->cliente_model->gettdcliente()
		);
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Juridico/juridico_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
		$nombre = $this->input->post("nombre");
		$tdcliente = $this->input->post("tdcliente");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$nit = $this->input->post("nit");
		$gmail = $this->input->post("gmail");
				
		$config = array(
            array(
                'field' => 'telefono',
                'label' => 'telefono',
                'rules' => 'is_natural',
                'errors' => array(
                    'is_natural' => 'solo acepta numeros',
                ),
			),
			array(
                'field' => 'nombre',
                'label' => 'nombre del cliente',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es obligatorio',
                ),
            ),
            array(
                'field' => 'nit',
                'label' => 'nit',
                'rules' => 'required|is_unique[cliente.Nit]',
                'errors' => array(
                    'is_unique' => 'El %s ya existe',
                    'required' => 'El campo %s es obligatorio',
                ),
			),
			array(
                'field' => 'gmail',
                'label' => 'correo electronico',
                'rules' => 'valid_email',
                'errors' => array(
                    'valid_email' => 'el %s no es valido',
                ),
			),
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$data = array(
				'Nombre' => $nombre,
				'Direccion' => $direccion,
				'Telefono' => $telefono,
				'Nit' => $nit,
				'Gmail' => $gmail,
				'IdTipoCliente' => "2",
				'Estado'=> "Activo"
			);
			if($this->cliente_model->save($data)){
				redirect(base_url()."Mantenimiento/Juridico_controller");
			}
			else {
				$this->session->set_flashdata("Error","No se pudo guardar la información");
				redirect(base_url()."Mantenimiento/Juridico_controller/add");
			}
		}else{
			$this->add();
		}
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdCliente){
		$data = array(
			'cliente'=> $this->cliente_model->new_cliente($IdCliente),
			'tipocliente' =>$this->cliente_model->gettdcliente()
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Juridico/juridico_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
		$IdCliente = $this->input->post("IdCliente");
		$tdcliente = $this->input->post("tdcliente");
		$nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$nit = $this->input->post("nit");
		$gmail = $this->input->post("gmail");

		$ClienteActual = $this->cliente_model->new_cliente($IdCliente);

		if ($nit == $ClienteActual->Nit) {
			$unique='';
		}
		else{
			$unique ='|is_unique[cliente.Nit]';
		} 
		$config = array(
            array(
                'field' => 'telefono',
                'label' => 'telefono',
                'rules' => 'is_natural',
                'errors' => array(
                    'is_natural' => 'solo acepta numeros',
                ),
            ),
            array(
                'field' => 'nit',
                'label' => 'nit',
                'rules' => 'is_natural'.$unique ,
                'errors' => array(
                    'is_unique' => 'el %s ya existe',
                    'is_natural' => 'el %s solo acepta numeros',
                ),
			),
			array(
                'field' => 'gmail',
                'label' => 'correo electronico',
                'rules' => 'valid_email',
                'errors' => array(
                    'valid_email' => 'el %s no es valido',
                ),
			),
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$data= array(
				'Nombre' => $nombre,
				'Direccion' => $direccion,
				'Telefono' => $telefono,
				'Nit' => $nit,
				'Gmail' => $gmail,
				'IdTipoCliente' => "2",
			);
			if($this->cliente_model->update($IdCliente,$data)){
				redirect(base_url()."Mantenimiento/Juridico_controller");
			}
			else{
				$this->session->set_flashdata("Error","No se pudo actualizar la información");
				redirect(base_url()."Mantenimiento/Juridico_controller/edit/".$IdCliente);
			}
		}else{
			$this->edit($IdCliente);
		}
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdCliente){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->cliente_model->update($IdCliente, $data);
		echo "Mantenimiento/Juridico_controller";
		// redirect(base_url()."Mantenimiento/Profesion_controller");
	}
}
