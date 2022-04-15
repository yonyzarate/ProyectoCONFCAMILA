<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class venta_model extends CI_Model {
    public function __construct()
    {
        parent::__construct(); 

    } 
    public function getventa(){ 
        $this->db->select("ve.IdVenta, ve.Fecha, ve.SubTotal, ve.Iva, ve.Descuento, ve.Total, ve.NroVenta, ve.NroComprobante, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante, tp.Nombre AS Tipopago, ve.Estado FROM venta AS ve
        INNER JOIN cliente AS cl ON cl.IdCliente=ve.IdCliente 
        INNER JOIN personal AS pe ON pe.IdPersonal=ve.IdPersonal
        INNER JOIN tipopago AS tp ON tp.IdTipopago=ve.IdTipopago
        INNER JOIN tipo_comprobante AS tc ON tc.IdTipo_comprobante=ve.IdTipo_comprobante WHERE ve.Estado='Activo';");
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }
    public function getVentasbyDate($fechainicio,$fechafin){
        $this->db->select("ve.IdVenta, ve.Fecha, ve.SubTotal, ve.Iva, ve.Descuento, ve.Total, ve.NroVenta, ve.NroComprobante, cl.Nombre, 
        CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal, tc.Nombre AS Comprobante, tp.Nombre AS Tipopago, ve.Estado FROM venta AS ve
        INNER JOIN cliente AS cl ON cl.IdCliente=ve.IdCliente 
        INNER JOIN personal AS pe ON pe.IdPersonal=ve.IdPersonal
        INNER JOIN tipopago AS tp ON tp.IdTipopago=ve.IdTipopago
        INNER JOIN tipo_comprobante AS tc ON tc.IdTipo_comprobante=ve.IdTipo_comprobante
		   WHERE (ve.Fecha >='$fechainicio' AND  ve.Fecha <='$fechafin')");
        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
    }

    public function getventas($idventa){
        $this->db->select("ve.IdVenta, ve.Fecha, ve.SubTotal, ve.Iva, ve.Descuento, ve.Total, ve.NroVenta, ve.NroComprobante,
        cl.Nombre, cl.Nit,cl.Telefono,cl.Direccion, 
       CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal,
        tc.Nombre AS Comprobante, tp.Nombre AS Tipopago  FROM venta AS ve
       INNER JOIN cliente AS cl ON cl.IdCliente=ve.IdCliente 
       INNER JOIN personal AS pe ON pe.IdPersonal=ve.IdPersonal
       INNER JOIN tipopago AS tp ON tp.IdTipopago=ve.IdTipopago
       INNER JOIN tipo_comprobante AS tc ON tc.IdTipo_comprobante=ve.IdTipo_comprobante WHERE ve.IdVenta='$idventa'");
        $resultados = $this->db->get();
        return $resultados->row();
    }

    public function getempresa(){
        $resultados = $this->db->get("empresa");
		return $resultados->result();
    }
    public function getdetalle($idventa){
        $this->db->select(" de.IdDetalleVenta,de.IdVenta, pr.Codigo, pr.Nombre,de.Precio, de.Cantidad, de.Importe
        FROM detalleventa AS de INNER JOIN producto1 AS pr ON pr.IdProducto=de.IdProducto WHERE de.IdVenta ='$idventa'");
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function getComprobantes(){
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
    }
    public function getComprobante($idcomprobante){
        $this->db->where("IdTipo_comprobante",$idcomprobante);
        $resultados = $this->db->get("tipo_comprobante");
        return $resultados->row();
    }
    public function getproductos($valor){
        $this->db->select("IdProducto as id, Codigo as codigo, Nombre as label, PrecioVenta as precio, Stock as stock");
        $this->db->from("producto1");
        $this->db->where("Estado","Activo");
        $this->db->like("codigo",$valor);
        $resultados =$this->db->get();
        return $resultados->result_array(); 
        
    } 
    public function save($data){
        return $this->db->insert("venta",$data);
    }
    public function lastID(){
		return $this->db->insert_id();
	}
    public function updateComprobante($idcomprobante,$data){
        $this->db->where("IdTipo_comprobante",$idcomprobante);
        $this->db->update("tipo_comprobante",$data);
    }
    public function save_detalle($data){
        $this->db->insert("detalleventa",$data);
    }
    public function years(){
        $this->db->select("YEAR(Fecha) as year");
        $this->db->from("venta");
        $this->db->group_by("year");
        $this->db->order_by("year","desc");
        $resultados = $this->db->get();
        return $resultados->result(); 
    }
    public function montos ($year){
        $this->db->select("MONTH(Fecha) as Mes, SUM(Total) as Monto");
        $this->db->from("venta");
        $this->db->where("Fecha >=",$year."-01-01");
        $this->db->where("Fecha <=",$year."-12-31");
        $this->db->group_by("Mes");
        $this->db->order_by("Mes");
        $resultados = $this->db->get();
        return $resultados->result();
    }
}