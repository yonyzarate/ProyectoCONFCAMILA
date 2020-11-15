<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nacionalidad_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getnacional ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("nacionalidad");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("nacionalidad",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_nacional($IdNacionalidad){
        $this->db->where("IdNacionalidad",$IdNacionalidad);
        $resultado = $this->db->get("nacionalidad");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdNacionalidad,$data){
        $this->db->where("IdNacionalidad",$IdNacionalidad);
        return $this->db->update("nacionalidad",$data);
    }

}