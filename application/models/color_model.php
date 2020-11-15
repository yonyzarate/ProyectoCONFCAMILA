<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class color_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getcolor ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("color");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("color",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_color($IdColor){
        $this->db->where("IdColor",$IdColor);
        $resultado = $this->db->get("color");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdColor,$data){
        $this->db->where("IdColor",$IdColor);
        return $this->db->update("color",$data);
    }

}