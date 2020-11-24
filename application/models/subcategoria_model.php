<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subcategoria_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
    // consulta para listar los registros en una vista 
    public function getsubcategoria(){
        $this->db->select("sub.*, cat.Nombre AS Categoria ");
        $this->db->from("subcategoria sub");
        $this->db->join("categoria cat","cat.IdCategoria=sub.IdCategoria");
        $resultado = $this->db->get();
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("subcategoria",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_subcategoria ($IdSubcategoria){
    
        $this->db->where("IdSubcategoria",$IdSubcategoria);
       $resultados = $this->db->get("subcategoria");
       return $resultados->row();

    }
    // función para poder cambiar el nuevo nombre del registro de categoria
    public function update($IdSubcategoria,$data){
        $this->db->where("IdSubcategoria",$IdSubcategoria);
        return $this->db->update("subcategoria",$data);
    }

    public function delete($IdSubcategoria){
        $this->db->where("IdSubcategoria",$IdSubcategoria);
        $this->db->delete("subcategoria");
    }

}