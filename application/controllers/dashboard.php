<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata("login")){
            redirect(base_url());
        }
        $this->load->model("Backend_model");
        $this->load->model("venta_model");
    }
	public function index()
	{
        $data = array(
			"cantVentas" => $this->Backend_model->rowCount("venta"),
			"cantUsuarios" => $this->Backend_model->rowCount("usuario"),
			"cantClientes" => $this->Backend_model->rowCount("cliente"),
            "cantProductos" => $this->Backend_model->rowCount("producto1"),
            "years" => $this->venta_model->years()
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/views_dashboard',$data);
        $this->load->view('layouts/footer');
    } 
    public function getData(){ 
		$year = $this->input->post("year");
		$resultados = $this->venta_model->montos($year);
		echo json_encode($resultados);
	}
} 
