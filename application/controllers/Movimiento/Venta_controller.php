<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_controller extends CI_Controller {
	private $permisos;
    public function __construct(){
		parent:: __construct(); 
		if(!$this->session->userdata("login")){
            redirect(base_url());
		}
		$this->permisos =$this->backend_lib->control();
        $this->load->model("venta_model");
		$this->load->model("cliente_model");
		$this->load->model("producto1_model");
		$this->load->model("tipopago_model");
		
          
    } 
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
			'permisos' =>$this->permisos,
			'ventas' => $this->venta_model->getventa()
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Ventas/venta_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
		$data = array(
			"tipocomprobantes" => $this->venta_model->getComprobantes(),
			"cliente" => $this->cliente_model->getCliente(),
			"tipopago" => $this->tipopago_model->gettipopago()
		);
		
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/ventas/venta_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
	 
	public function getproductos(){ 
		$valor = $this->input->post("valor");
		$clientes = $this->venta_model->getproductos($valor);
		echo json_encode($clientes);
	}
	public function store (){
		//  $fecha = $this->input->post("fecha");
		 $subtotal = $this->input->post("subtotal");
		 $iva = $this->input->post("iva");
		 $descuento = $this->input->post("descuento");
		 $total = $this->input->post("total");
		 $serie = $this->input->post("serie");
		 $nrocomprobante = $this->input->post("nrocomprobante");
		 $idcliente = $this->input->post("idcliente");
		 $idusuario = $this->session->userdata("IdUsuario");
		 $idcomprobante = $this->input->post("idcomprobante");
		 $tipopago = $this->input->post("tipopago");
		
		 $idproductos = $this->input->post("idproductos");
		 $precios = $this->input->post("precios");
		 $cantidades = $this->input->post("cantidades");
		 $importes = $this->input->post("importes");
		
		$data = array(
			// 'Fecha'=>$fecha,
			'SubTotal'=>$subtotal,
			'Iva'=>$iva,
			'Descuento'=>$descuento,
			'Total'=>$total,
			'NroVenta'=>$serie,
			'NroComprobante'=>$nrocomprobante,
			'IdCliente'=>$idcliente,
			'IdPersonal'=>$idusuario,
			'IdTipo_comprobante'=>$idcomprobante,
			'IdTipopago'=>$tipopago,
			'Estado'=>"Activo"
		);
		if($this->venta_model->save($data)){
			$idventa = $this->venta_model->lastID();
			$this->updateComprobante($idcomprobante);
			$this->save_detalle($idproductos,$idventa,$precios,$cantidades,$importes);
			redirect(base_url()."Movimiento/Venta_controller");
		}else{
			redirect(base_url()."Movimiento/Venta_controller/add");
		}

	}

	protected function updateComprobante($idcomprobante){
		$comprobanteActual = $this->venta_model->getComprobante($idcomprobante);
		$data = array(
			'Cantidad' =>$comprobanteActual->Cantidad+1,
		);	
		$this->venta_model->updateComprobante($idcomprobante,$data);
	 }
	 
	 protected function save_detalle($productos,$idventa,$precios,$cantidades,$importes){
		 for ($i=0; $i < count($productos) ; $i++) { 
			 $data = array(
				 'Precio'=> $precios[$i],
				 'Cantidad'=> $cantidades[$i],
				 'Importe'=>$importes[$i],
				 'IdVenta'=>$idventa,
				 'IdProducto'=>$productos[$i],
			 );
			 $this->venta_model->save_detalle($data);
			 $this->updateProducto($productos[$i],$cantidades[$i]);
		 }
	 }
	//  funcion para actualizar la tabla de productos campo Stock
	 protected function updateProducto($idproducto,$cantidad){
		 $idcomprobante = $this->input->post("idcomprobante");
		//  $ActualIdComprobante =$this->venta_model->getComprobante($idcomprobante);
		 $productoActual = $this->producto1_model->new_producto($idproducto);
		 if($idcomprobante == 1){
		 $data = array(
			 'Stock'=> $productoActual->Stock - $cantidad,
		 );
		 $this->producto1_model->update($idproducto,$data);
		}
		else{}
	 }

	 // controlador que recoge el id de la venta por ajax 
	 public function view(){
		  $idventa = $this->input->post("id");
			 $data = array(
				 'ventas' => $this->venta_model->getventas($idventa),
				 'detalle' => $this->venta_model->getdetalle($idventa),
				 'empresa' => $this->venta_model->getempresa()
				 
			 );
			
		 $this->load->view("admin/Ventas/venta_view",$data); 
	 }
}
