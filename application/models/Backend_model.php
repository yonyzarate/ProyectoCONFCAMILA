<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {

    // consulta para que me compara el link con el que se va utilizar en el controlador 
    public function getID($link){
        $this->db->like("Link",$link);
        $resultado = $this->db->get("menu");
        return $resultado->row();
    }

    public function getPermisos($menu,$rol){
        $this->db->where("IdMenu",$menu);
        $this->db->where("IdRol",$rol);
        $resultado = $this->db->get("permisos");
        return $resultado->row();
    }
    public function rowCount($tabla){
		if ($tabla != "confcamila") {
			$this->db->where("Estado","Activo");
		}
		$resultados = $this->db->get($tabla);
		return $resultados->num_rows();
	}
}