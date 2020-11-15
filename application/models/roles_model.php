<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class roles_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getroles ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("rol");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("rol",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_roles($IdRol){
        $this->db->where("IdRol",$IdRol);
        $resultado = $this->db->get("rol");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdRol,$data){
        $this->db->where("IdRol",$IdRol);
        return $this->db->update("rol",$data);
    }

}