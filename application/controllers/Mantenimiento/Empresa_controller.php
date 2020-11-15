<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("empresa_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'empresa' =>$this->empresa_model->getempresa(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Empresa/empresa_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Empresa/empresa_add_view');
        $this->load->view('layouts/footer');
		
    }
    // $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
        // $Imagen = $this->input->FILES("Imagen);
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
        $nombre = $this->input->post("nombre");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $gmail = $this->input->post("gmail");
        $nit = $this->input->post("nit");
        $imge = 'Sin_imagen_disponible.jpg';
        
        if (empty($_FILES['logo']['name'])) {
            $data = array(
                'Nombre' => $nombre,
                'Direccion' => $direccion,
                'Telefono' => $telefono,
                'Gmail' => $gmail,
                'Nit' => $nit,
                'Logo' => $imge,
                'Estado'=> "Activo"
            );
            if($this->empresa_model->save($data)){
                redirect(base_url()."Mantenimiento/Empresa_controller");
            }
            else {
                $this->session->set_flashdata("Error","No se pudo guardar la información");
                redirect(base_url()."Mantenimiento/Empresa_controller/add");
            }
        }else{
            $config['upload_path'] = './uploads/imagenes/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('logo')) {
                $images = $this->upload->data('file_name');
            }else {
                echo $this->upload->display_errors();
            }
                $data = array(
                    'Nombre' => $nombre,
                    'Direccion' => $direccion,
                    'Telefono' => $telefono,
                    'Gmail' => $gmail,
                    'Nit' => $nit,
                    'Logo' => $images,
                    'Estado'=> "Activo"
                );
                if($this->empresa_model->save($data)){
                    redirect(base_url()."Mantenimiento/Empresa_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo guardar la información");
                    redirect(base_url()."Mantenimiento/Empresa_controller/add");
                }
    }
				
	
   }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdEmpresa){
		$data = array(
			'empresa'=> $this->empresa_model->new_empresa($IdEmpresa)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Empresa/empresa_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
        $IdEmpresa =$this->input->post("IdEmpresa");
        $nombre = $this->input->post("nombre");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $gmail = $this->input->post("gmail");
        $nit = $this->input->post("nit");
        
        
        if (empty($_FILES['logo']['name'])) {
            
            $data = array(
                'Nombre' => $nombre,
                'Direccion' => $direccion,
                'Telefono' => $telefono,
                'Gmail' => $gmail,
                'Nit' => $nit,
                
                
            );
            if($this->empresa_model->update($IdEmpresa,$data)){
                redirect(base_url()."Mantenimiento/Empresa_controller");
            }
            else {
                $this->session->set_flashdata("Error","No se pudo modificar la información");
                redirect(base_url()."Mantenimiento/Empresa_controller/edit/".$IdEmpresa);
            }
        }else{
            
            $config['upload_path'] = './uploads/imagenes/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('logo')) {
                $images= $this->upload->data('file_name');
                $logoactual =$this->empresa_model->new_empresa($IdEmpresa);
                if ($logoactual->Logo =='Sin_imagen_disponible.jpg') {
                
                }
                else
                {
                    unlink('./uploads/imagenes/'.$logoactual->Logo);
                }
                $data = array(
                    'Nombre' => $nombre,
                    'Direccion' => $direccion,
                    'Telefono' => $telefono,
                    'Gmail' => $gmail,
                    'Nit' => $nit,
                    'Logo' => $images,
                    
                );
                if($this->empresa_model->update($IdEmpresa,$data)){
                    redirect(base_url()."Mantenimiento/Empresa_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo modificar la información");
                    redirect(base_url()."Mantenimiento/Empresa_controller/add".$IdEmpresa);
                }
            }
           
               
         }
				
	
   }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdEmpresa){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->empresa_model->update($IdEmpresa, $data);
		echo "Mantenimiento/Empresa_controller";
		// redirect(base_url()."Mantenimiento/Imagen_controller");
	}
}
