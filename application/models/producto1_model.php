<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class producto1_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getproducto ()
    {
        $this->db->select("pr.*, ta.Nombre as Talla, co.Nombre as Color, sub.Nombre as Subcategoria");
        $this->db->from("producto1 pr");
        $this->db->join("talla ta","ta.IdTalla=pr.IdTalla");
        $this->db->join("color co","co.IdColor=pr.IdColor");
        $this->db->join("subcategoria sub","sub.IdSubcategoria=pr.IdSubcategoria");
        $this->db->where("pr.Estado","Activo");
        //$this->db->join("categoria ca","sub.IdSubcategoria=ca.IdSubcategoria");
        $resultado = $this->db->get();
        return $resultado->result();
    }
    public function fetch_subcategoria($IdCategoria){
        $this->db->where("IdCategoria",$IdCategoria);
        $this->db->order_by("Nombre","ASC");
        $resultado = $this->db->get("subcategoria");

        $option ="";
        foreach ($resultado->result() as $row) {
            $option .='<option value="'.$row->IdSubcategoria.'">'.$row->Nombre.' </option>'; 
        }
        return $option;
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("producto1",$data);
    }

     // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_producto($IdProducto){
        $this->db->where("IdProducto",$IdProducto);
        $resultado = $this->db->get("producto1");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdProducto,$data){
        $this->db->where("IdProducto",$IdProducto);
        return $this->db->update("producto1",$data);
    }
}