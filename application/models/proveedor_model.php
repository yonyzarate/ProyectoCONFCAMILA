<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proveedor_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getproveedor ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("proveedor");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("proveedor",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_proveedor($IdProveedor){
        $this->db->where("IdProveedor",$IdProveedor);
        $resultado = $this->db->get("proveedor");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdProveedor,$data){
        $this->db->where("IdProveedor",$IdProveedor);
        return $this->db->update("proveedor",$data);
    }

}