<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipopago_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
// Consulta para traer a todos que tengan el estado activo 
    public function gettipopago ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("tipopago");
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("tipopago",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_tipopago($IdTipopago){
        $this->db->where("IdTipopago",$IdTipopago);
        $resultado = $this->db->get("tipopago");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdTipopago,$data){
        $this->db->where("IdTipopago",$IdTipopago);
        return $this->db->update("tipopago",$data);
    }

}