<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reporte_model extends CI_Model {
    public function __construct()
    {
        parent::__construct(); 

    } 
    public function getfactura(){ 
        $this->db->select("ve.*, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante ");
        $this->db->from("venta ve");
        $this->db->join("cliente cl","cl.IdCliente=ve.IdCliente");
        $this->db->join("personal pe","pe.IdPersonal=ve.IdPersonal");
        $this->db->join("tipo_comprobante tc","tc.IdTipo_comprobante=ve.IdTipo_comprobante");  
        $this->db->where("ve.Estado","Activo");  
        $this->db->where("tc.Nombre","Factura");  
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }

    public function getVentasbyDatefactura($fechainicio,$fechafin){
        $this->db->select("ve.*, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante ");
        $this->db->from("venta ve");
        $this->db->join("cliente cl","cl.IdCliente=ve.IdCliente");
        $this->db->join("personal pe","pe.IdPersonal=ve.IdPersonal");
        $this->db->join("tipo_comprobante tc","tc.IdTipo_comprobante=ve.IdTipo_comprobante");  
        $this->db->where("ve.Estado","Activo");  
        $this->db->where("tc.Nombre","Factura");  
        $this->db->where("ve.Fecha >=",$fechainicio);   
        $this->db->where("ve.Fecha <=",$fechafin);  
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }
    public function getVentasbyDatefacturaactual($fechaactual){
        $this->db->select("ve.*, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante ");
        $this->db->from("venta ve");
        $this->db->join("cliente cl","cl.IdCliente=ve.IdCliente");
        $this->db->join("personal pe","pe.IdPersonal=ve.IdPersonal");
        $this->db->join("tipo_comprobante tc","tc.IdTipo_comprobante=ve.IdTipo_comprobante");  
        $this->db->where("ve.Estado","Activo");  
        $this->db->where("tc.Nombre","Factura");  
        $this->db->where("ve.Fecha",$fechaactual); 
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }
    public function getcotizacion(){ 
        $this->db->select("ve.*, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante ");
        $this->db->from("venta ve");
        $this->db->join("cliente cl","cl.IdCliente=ve.IdCliente");
        $this->db->join("personal pe","pe.IdPersonal=ve.IdPersonal");
        $this->db->join("tipo_comprobante tc","tc.IdTipo_comprobante=ve.IdTipo_comprobante");  
        $this->db->where("ve.Estado","Activo");  
        $this->db->where("tc.Nombre","Cotizacion");  
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }

    public function getVentasbyDatecotizacion($fechainicio,$fechafin){
        $this->db->select("ve.*, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante ");
        $this->db->from("venta ve");
        $this->db->join("cliente cl","cl.IdCliente=ve.IdCliente");
        $this->db->join("personal pe","pe.IdPersonal=ve.IdPersonal");
        $this->db->join("tipo_comprobante tc","tc.IdTipo_comprobante=ve.IdTipo_comprobante");  
        $this->db->where("ve.Estado","Activo");  
        $this->db->where("tc.Nombre","Cotizacion");  
        $this->db->where("ve.Fecha >=",$fechainicio);  
        $this->db->where("ve.Fecha <=",$fechafin);  
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }
}