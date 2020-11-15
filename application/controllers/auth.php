<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   
class Auth extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model("usuarios_model");
    }   
	public function index()
	{
       
       if($this->session->userdata("login")){
           redirect(base_url()."dashboard");
       }
       else{
        $this->load->view('admin/login');
       }
    }
      
    public function login (){
        $nombreusuario = $this->input->post("nombreusuario");
        $contrasena = $this->input->post("contrasena");

        $res =$this->usuarios_model->login($nombreusuario,sha1($contrasena));


         if(!$res){
             $this->session->set_flashdata("error","El usuario y/o contraseña es incorrecto ");
            redirect(base_url());
        }
        else {
             $data = array(
                 'IdUsuario'=>$res->IdUsuario,
                 'Nombre'=>$res->Nombre,
                 'NombreUsuario'=>$res->NombreUsuario,
                 'IdPersonal'=>$res->IdPersonal,
                 'IdRol'=>$res->IdRol,
                 'login' => true
             );
             $this->session->set_userdata($data);
             redirect(base_url()."dashboard");
        }
    }

    public function logout(){
        $this-> session->sess_destroy();
        redirect(base_url());
    }
}
