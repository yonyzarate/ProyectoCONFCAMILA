<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class producto_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getproducto ()
    {
        $this->db->select("pr.IdProducto, pr.Nombre, pr.NroSerie, pr.Codigo, pr.CodigoBarra, pr.Descripcion, pr.Caracteristicas, pr.Stock, pr.Imagen, pr.PrecioCompra,
        pr.PrecioVenta, pr.PrecioOferta, na.Nombre AS Nacionalidad, co.Nombre AS Color, ma.Nombre AS Marca, tp.Nombre AS TipoProducto,
        pd.NombreEmpresa AS Proveedor, pr.Estado  FROM producto AS pr 
        INNER JOIN nacionalidad AS na ON na.IdNacionalidad=pr.IdNacionalidad 
        INNER JOIN color AS co ON co.IdColor=pr.IdColor
        INNER JOIN marca AS ma ON ma.IdMarca=pr.IdMarca
        INNER JOIN tipoproducto tp ON tp.IdTipoProducto=pr.IdTipoProducto
        INNER JOIN proveedor pd ON pd.IdProveedor=pr.IdProveedor 
        WHERE pr.Estado= 'Activo';");
        $resultado = $this->db->get();
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("producto",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_producto($IdProducto){
        $this->db->where("IdProducto",$IdProducto);
        $resultado = $this->db->get("producto");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdProducto,$data){
        $this->db->where("IdProducto",$IdProducto);
        return $this->db->update("producto",$data);
    }

}