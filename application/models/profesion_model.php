<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profesion_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getprofesion ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("profesion");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("profesion",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_profesion($IdProfesion){
        $this->db->where("IdProfesion",$IdProfesion);
        $resultado = $this->db->get("profesion");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdProfesion,$data){
        $this->db->where("IdProfesion",$IdProfesion);
        return $this->db->update("profesion",$data);
    }

} 