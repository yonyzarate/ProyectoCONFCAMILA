<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function gettipo ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("tipoproducto");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("tipoproducto",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_tipo($IdTipoProducto){
        $this->db->where("IdTipoProducto",$IdTipoProducto);
        $resultado = $this->db->get("tipoproducto");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdTipoProducto,$data){
        $this->db->where("IdTipoProducto",$IdTipoProducto);
        return $this->db->update("tipoproducto",$data);
    }

}