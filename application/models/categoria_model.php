<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoria_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

     }
     // Esta funcion sirve para poder listar todas las categorias
    public function getcategoria ()
    {
        // $this->db->select(" ca.IdCategoria, ca.Nombre from categoria as ca");
        $resultado = $this->db->get("categoria");
        return $resultado->result();
    }
    // Esta funcion nos sirve para poder insertar un nuevo registro
    public function save($data){
        return $this->db->insert("categoria",$data);
    }
    // Esta funcion nos sirve para poder llevar los datos que queremos editar a la vista editar 
    public function new_categoria($IdCategoria){
        $this->db->where("IdCategoria",$IdCategoria);
        $resultado = $this->db->get("categoria");
        return $resultado->row();
    }
    // función para poder cambiar el nuevo nombre del registro de categoria
    public function update($IdCategoria,$data){
        $this->db->where("IdCategoria",$IdCategoria);
        return $this->db->update("categoria",$data);
    }
    public function delete($IdCategoria){
        $this->db->where("IdCategoria",$IdCategoria);
        $this->db->delete("categoria");
    }
}
?>