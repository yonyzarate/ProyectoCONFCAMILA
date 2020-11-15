<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("personal_model");
       
        
    }
	public function index()
	{
        
        $data = array(
            'permisos' =>$this->permisos,
			'personal' =>$this->personal_model->getpersonal(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Personal/personal_list',$data);
        $this->load->view('layouts/footer');
    }

    // controlador  que me manda a la vista usuario_add_view para agregar un nuevo personal 
	public function add()
	{
        $data = array(
            'profesion' =>$this->personal_model->getprofesion(),
            'rol' =>$this->personal_model->getroles(),
            'sexo' =>$this->personal_model->getsexo(),
		);
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/personal/personal_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
    // Controlador que recoge datos de las consultas de model para insert un nuevo 
    public function store(){
       
        $nombre = $this->input->post("nombre");
        $apellidop = $this->input->post("apellidop");
        $apellidom = $this->input->post("apellidom");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $gmail = $this->input->post("gmail");
        $ci = $this->input->post("ci");
        $fechanacimiento = $this->input->post("fechanacimiento");
        $fecharegistro = $this->input->post("fecharegistro");
        $sexo = $this->input->post("sexo");
        $profesion = $this->input->post("profesion");
        $roles = $this->input->post("roles");
        
           
        $config = array(
            array(
                'field' => 'nombre',
                'label' => 'personal',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresar un nombre del %s',
                ),
            ),
            array(
                'field' => 'apellidop',
                'label' => 'apellido paterno',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresar el %s del personal',
                ),
            ),
            array(
                'field' => 'direccion',
                'label' => 'direccion',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresar la %s',
                ),
            ),
            array(
                'field' => 'telefono',
                'label' => 'telefono',
                'rules' => 'required|is_natural|is_unique[personal.Telefono]',
                'errors' => array(
                    'required' => 'Debe ingresar un %s',
                    'is_unique' => 'El %s ya existe',
                    'is_natural' => 'El %s tiene que ser un numero natural',
                ),
            ),
            array(
                'field' => 'gmail',
                'label' => 'correo electronico',
                'rules' => 'valid_email|is_unique[personal.Gmail]',
                'errors' => array(
                    'valid_email' => 'Ingrese un %s valido',
                    'is_unique' => 'El %s ya existe',
                ),
            ),
            array(
                'field' => 'ci',
                'label' => 'cedula de indentidad',
                'rules' => 'required|is_unique[personal.CedulaIdentidad]',
                'errors' => array(
                    'required' => 'Ingrese la %s.',
                    'is_unique' => 'La %s ya existe.',
                ),
            ),
            array(
                'field' => 'fechanacimiento',
                'label' => 'fecha de nacimiento',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Ingrese la %s.',
                ),
            ),
            array(
                'field' => 'fecharegistro',
                'label' => 'fecha de registro',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Ingrese la %s.',
                ),
            ),
            
            
        );
        $this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
		    $data = array(

                'Nombre' => $nombre,
                'ApellidoPaterno' =>$apellidop,
                'ApellidoMaterno'=> $apellidom,
                'Direccion'=>$direccion,
                'Telefono'=>$telefono,
                'Gmail'=>$gmail,
                'CedulaIdentidad'=>$ci,
                'FechaNacimiento'=>$fechanacimiento,
                'FechaRegistro'=>$fecharegistro,
                'IdSexo'=>$sexo,
                'IdProfesion'=>$profesion,
                'IdRol'=>$roles,
                'Estado'=>"Activo",
            );
            // echo $data;
		    if($this->personal_model->save($data)){
		    	redirect(base_url()."Mantenimiento/Personal_controller");
		    }
		    else {
		    	$this->session->set_flashdata("Error","No se pudo guardar la información");
		    	redirect(base_url()."Mantenimiento/Personal_controller/add");
            }
        }else{
                $this->add();
            }
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdPersonal){
		$data = array(
            'profesion' =>$this->personal_model->getprofesion(),
            'rol' =>$this->personal_model->getroles(),
            'sexo' =>$this->personal_model->getsexo(),
            'personal'=>$this->personal_model->new_personal($IdPersonal)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Personal/personal_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
        $IdPersonal=$this->input->post("IdPersonal");
        $nombre = $this->input->post("nombre");
        $apellidop = $this->input->post("apellidop");
        $apellidom = $this->input->post("apellidom");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $gmail = $this->input->post("gmail");
        $ci = $this->input->post("ci");
        $fechanacimiento = $this->input->post("fechanacimiento");
        $fecharegistro = $this->input->post("fecharegistro");
        $sexo = $this->input->post("sexo");
        $profesion= $this->input->post("profesion");
        $roles = $this->input->post("roles");
         
        $PersonalActual = $this->personal_model->new_personal($IdPersonal);

		if ($telefono == $PersonalActual->Telefono) {
			$uniquetel='';
		}
		else{
			$uniquetel ='|is_unique[personal.Telefono]';
        } 
        if ($gmail == $PersonalActual->Gmail) {
			$uniquege='';
		}
		else{
			$uniquege ='|is_unique[personal.Gmail]';
        }    
        if ($ci == $PersonalActual->CedulaIdentidad) {
			$uniqueci='';
		}
		else{
			$uniqueci ='|is_unique[personal.CedulaIdentidad]';
        }
        $config = array(
            array(
                'field' => 'nombre',
                'label' => 'personal',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresar un nombre del %s',
                ),
            ),
            array(
                'field' => 'apellidop',
                'label' => 'apellido paterno',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresar el %s del personal',
                ),
            ),
            array(
                'field' => 'direccion',
                'label' => 'direccion',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresar la %s',
                ),
            ),
            array(
                'field' => 'telefono',
                'label' => 'telefono',
                'rules' => 'required'.$uniquetel,
                'errors' => array(
                    'required' => 'Debe ingresar el numero de %s',
                    'is_unique' => 'El numero de %s ya pertenece a un personal.',
                    'is_natural' => 'Solo numeros naturales.',
                ),
            ),
            array(
                'field' => 'gmail',
                'label' => 'correo electronico',
                'rules' => 'valid_email'.$uniquege,
                'errors' => array(
                    'valid_email' => 'Ingrese un %s valido.',
                    'is_unique' => 'El %s ya existe.',
                ),
            ),
            array(
                'field' => 'ci',
                'label' => 'cedula de indentidad',
                'rules' => 'required'.$uniqueci,
                'errors' => array(
                    'required' => 'Ingrese la %s.',
                    'is_unique' => 'La %s ya existe.',
                ),
            ),
            array(
                'field' => 'fechanacimiento',
                'label' => 'fecha de nacimiento',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Ingrese la %s.',
                ),
            ),
        );
        $this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {        
        
            $data = array(

               'Nombre' => $nombre,
               'ApellidoPaterno' =>$apellidop,
               'ApellidoMaterno'=> $apellidom,
               'Direccion'=>$direccion,
               'Telefono'=>$telefono,
               'Gmail'=>$gmail,
               'CedulaIdentidad'=>$ci,
               'FechaNacimiento'=>$fechanacimiento,
               'FechaRegistro'=>$fecharegistro,
               'IdSexo'=>$sexo,
               'IdProfesion'=>$profesion,
               'IdRol'=>$roles,
            
            );
            if($this->personal_model->update($IdPersonal,$data)){
                redirect(base_url()."Mantenimiento/Personal_controller");
            }
            else {
                $this->session->set_flashdata("Error","No se pudo guardar la información");
                redirect(base_url()."Mantenimiento/Personal_controller/edit/".$IdPersonal);
            }
        }else{
            $this->edit($IdPersonal);
        }
    }
     public function delete($IdPersonal)
     {
         $data = array(
             'Estado' => 'Inactivo'  
         );
          $this->personal_model->update($IdPersonal,$data);
          echo "Mantenimiento/Personal_controller";
     }
}