<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("usuarios_model");
        
    }
    // formulario para la contraseña
    // ^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])(?=\w*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_$]{8,15}$
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'usuario' =>$this->usuarios_model->getusuario(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Usuario/usuario_list',$data);
        $this->load->view('layouts/footer');
    }
    // controlador  que me manda a la vista  nuevo  
	public function add()
	{
        $data = array(
			'personal' =>$this->usuarios_model->getpersonall(),
		);
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Usuario/usuario_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo 
    public function store(){
       
        $nombreusuario = $this->input->post("nombreusuario");
        $password = $this->input->post("password");
        $personall = $this->input->post("personall");
        
        $config = array(
            array(
                'field' => 'nombreusuario',
                'label' => 'nombre de usuario',
                'rules' => 'required|is_unique[usuario.NombreUsuario]',
                'errors' => array(
                    'required' => 'el %s es importante',
                    'is_unique' => 'el %s ya existe',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'contraseña',
                'rules' => 'required|min_length[8]|max_length[15]|regex_match[/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])(?=\w*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_$]{8,15}$/]',
                'errors' => array(
                    'min_length' => 'La %s debe ser mayor o igual a 8 caracteres',
                    'max_length' => 'La %s debe ser menor o igual a 15 caracteres',
                    'regex_match' => 'Ingrese una %s valida',
                    'required' => 'Debe ingresar una %s.',
                ),
            ),
        );
        $this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
		    $data = array(

                'NombreUsuario' => $nombreusuario,
                'Contrasena' =>sha1($password),
                'Estado'=> "Activo",
                'IdPersonal'=>$personall,
		    );
		    if($this->usuarios_model->save($data)){
		    	redirect(base_url()."Mantenimiento/Usuario_controller");
		    }
		    else {
		    	$this->session->set_flashdata("Error","No se pudo guardar la información");
		    	redirect(base_url()."Mantenimiento/Usuario_controller/add");
            }
        }else{
            $this->add();
        }
    }
     // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdUsuario){
		$data = array(
            'personal' =>$this->usuarios_model->getpersonall(),
            'usuario'=>$this->usuarios_model->getusuarios($IdUsuario)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Usuario/usuario_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
         $IdUsuario=$this->input->post("IdUsuario");
         $nombreusuario = $this->input->post("nombreusuario");
         $personall = $this->input->post("personall");
            
        $data = array(
            'NombreUsuario' => $nombreusuario, 
            
		);
		if($this->usuarios_model->update($IdUsuario,$data)){
			redirect(base_url()."Mantenimiento/Usuario_controller");
		}
		else {
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Mantenimiento/Usuario_controller/edit/".$IdUsuario);
        }
       
    }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdUsuario){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->usuarios_model->update($IdUsuario, $data);
		echo "Mantenimiento/Usuario_controller";
		// redirect(base_url()."Mantenimiento/Usuario_controller");
	}
//
}
