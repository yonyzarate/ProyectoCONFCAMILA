<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empresa_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getempresa ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("empresa");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("empresa",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_empresa($IdEmpresa){
        $this->db->where("IdEmpresa",$IdEmpresa);
        $resultado = $this->db->get("empresa");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdEmpresa,$data){
        $this->db->where("IdEmpresa",$IdEmpresa);
        return $this->db->update("empresa",$data);
    }

}