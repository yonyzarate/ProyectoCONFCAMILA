<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class permisos_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
    public function getPermisos (){
        $this->db->select("pe.IdPermiso, me.Nombre AS Menu, ro.Nombre AS Rol, pe.Leer, pe.Insertar, pe.Actualizar, pe.Eliminar, pe.Estado FROM permisos AS pe 
        INNER JOIN menu AS me ON me.IdMenu=pe.IdMenu
        INNER JOIN rol AS ro ON ro.IdRol=pe.IdRol WHERE pe.Estado ='Activo'");
        $resultado =$this->db->get();
        return $resultado->result();
    }

    public function getmenu (){
        $resultado = $this->db->get("menu");
        return $resultado->result();
    }
    public function save($data){
        return $this->db->insert("permisos",$data);
    }
    public function new_permisos($IdPermiso){
        $this->db->where("IdPermiso",$IdPermiso);
        $resultado = $this->db->get("permisos");
        return $resultado->row();
    }
    public function update($IdPermiso,$data){
        $this->db->where("IdPermiso",$IdPermiso);
        return  $this->db->update("permisos",$data);
        
    }
}