<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("imagen_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'imagenes' =>$this->imagen_model->getimagen(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Imagen/imagen_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Imagen/imagen_add_view');
        $this->load->view('layouts/footer');
		
    }
    // $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
        // $Imagen = $this->input->FILES("Imagen);
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
        $nombre = $this->input->post("nombre");
        $imge = 'Sin_imagen_disponible.jpg';
        
        if (empty($_FILES['Imagen']['name'])) {
            $data = array(
                'Nombre' => $nombre,
                'Imagen' => $imge,
                'Estado'=> "Activo"
            );
            if($this->imagen_model->save($data)){
                redirect(base_url()."Mantenimiento/Imagen_controller");
            }
            else {
                $this->session->set_flashdata("Error","No se pudo guardar la información");
                redirect(base_url()."Mantenimiento/Imagen_controller/add");
            }
        }else{
            $config['upload_path'] = './uploads/imagenes/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('Imagen')) {
                $images = $this->upload->data('file_name');
            }else {
                echo $this->upload->display_errors();
            }
                $data = array(
                    'Nombre' => $nombre,
                    'Imagen' => $images,
                    'Estado'=> "Activo"
                );
                if($this->imagen_model->save($data)){
                    redirect(base_url()."Mantenimiento/Imagen_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo guardar la información");
                    redirect(base_url()."Mantenimiento/Imagen_controller/add");
                }
    }
				
	
   }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdImagen){
		$data = array(
			'imagenes'=> $this->imagen_model->new_imagen($IdImagen)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Imagen/imagen_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
        $IdImagen =$this->input->post("IdImagen");
        $nombre = $this->input->post("nombre");
        
        
        if (empty($_FILES['Imagen']['name'])) {
            
            $data = array(
                'Nombre' => $nombre,
                
                
            );
            if($this->imagen_model->update($IdImagen,$data)){
                redirect(base_url()."Mantenimiento/Imagen_controller");
            }
            else {
                $this->session->set_flashdata("Error","No se pudo modificar la información");
                redirect(base_url()."Mantenimiento/Imagen_controller/edit/".$IdImagen);
            }
        }else{
            
            $config['upload_path'] = './uploads/imagenes/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('Imagen')) {
                $images= $this->upload->data('file_name');
                $fotoactual =$this->imagen_model->new_imagen($IdImagen);
                if ($fotoactual->Imagen =='Sin_imagen_disponible.jpg') {
                
                }
                else
                {
                    unlink('./uploads/imagenes/'.$fotoactual->Imagen);
                }
                $data = array(
                    'Nombre' => $nombre,
                    'Imagen' => $images,
                    
                );
                if($this->imagen_model->update($IdImagen,$data)){
                    redirect(base_url()."Mantenimiento/Imagen_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo modificar la información");
                    redirect(base_url()."Mantenimiento/Imagen_controller/add".$IdImagen);
                }
            }
           
               
         }
				
	
   }
    //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
    public function delete ($IdImagen){
		$data = array(
			'Estado' =>"Inactivo",
		);
		$this->imagen_model->update($IdImagen, $data);
		echo "Mantenimiento/Imagen_controller";
		// redirect(base_url()."Mantenimiento/Imagen_controller");
	}
}
