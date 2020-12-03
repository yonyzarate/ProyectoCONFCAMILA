<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReporteVenta_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("venta_model");
        $this->load->model("reporte_model");
    }

    /// controlador para llamar el listado de modelo para mostrar en la vista 
    public function index()
	{
        $fechainicio = $this->input->post("fechainicio");
        $fechafin = $this->input->post("fechafin");
        if($this->input->post("buscar")){
            $ventas = $this->venta_model->getVentasbyDate($fechainicio,$fechafin);

        }
        else{
            $ventas = $this->venta_model->getventa();
        }
        $data = array(
            'permisos' =>$this->permisos,
			'ventas' => $ventas,
			'fechainicio' => $fechainicio,
			'fechafin' => $fechafin
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Reporte/reporte_venta_view',$data);
        $this->load->view('layouts/footer');
    } 
    /// controlador para llamar el listado de modelo para mostrar en la vista 
    public function factura()
	{
        $fechainicio = $this->input->post("fechainicio");
        $fechafin = $this->input->post("fechafin");
        if($this->input->post("buscar")){
            $ventas = $this->reporte_model->getVentasbyDatefactura($fechainicio,$fechafin);

        }
        else{
            $ventas = $this->reporte_model->getfactura();
        }
        $data = array(
            'permisos' =>$this->permisos,
			'ventas' => $ventas,
			'fechainicio' => $fechainicio,
			'fechafin' => $fechafin
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Reporte/reporte_venta_view',$data);
        $this->load->view('layouts/footer');
    } 
    public function cotizacion()
	{
        $fechainicio = $this->input->post("fechainicio");
        $fechafin = $this->input->post("fechafin");
        if($this->input->post("buscar")){
            $ventas = $this->reporte_model->getVentasbyDatecotizacion($fechainicio,$fechafin);

        }
        else{
            $ventas = $this->reporte_model->getcotizacion();
        }
        $data = array(
            'permisos' =>$this->permisos,
			'ventas' => $ventas,
			'fechainicio' => $fechainicio,
			'fechafin' => $fechafin
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Reporte/reporte_cotizacion_view',$data);
        $this->load->view('layouts/footer');
    } 


}