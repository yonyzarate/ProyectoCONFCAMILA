<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class imagen_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function getimagen ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("imagenes");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("imagenes",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_imagen($IdImagen){
        $this->db->where("IdImagen",$IdImagen);
        $resultado = $this->db->get("imagenes");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdImagen,$data){
        $this->db->where("IdImagen",$IdImagen);
        return $this->db->update("imagenes",$data);
    }

}