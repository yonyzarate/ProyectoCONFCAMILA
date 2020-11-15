<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class personal_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

 	}
    // consulta para mostrar la lista de usuarios en al vista se van a mostrar todos los los que tengan estado 1 (1=>activo 0=> inactivo)
    public function getpersonal ()
    {
       
        $this->db->select("pe.IdPersonal, CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno)AS Nombre, pe.Direccion,
        pe.Telefono,pe.Gmail,  pe.CedulaIdentidad, pe.FechaNacimiento, pe.FechaRegistro, se.Nombre AS Sexo, pr.Nombre AS Profesion, ro.Nombre AS Rol, pe.Estado  
      FROM personal AS pe INNER JOIN profesion AS pr ON pr.IdProfesion=pe.IdProfesion  INNER JOIN rol AS ro ON ro.IdRol=pe.IdRol INNER JOIN 
      sexo AS se ON se.IdSexo= pe.IdSexo 
       WHERE pe.Estado='Activo' ");
        $resultado = $this->db->get();
        return $resultado->result();
    }
    // consulta que me trae la id y el nombre completo para mostrarlo en el combo box o en seleccionar 
    public function getsexo (){
        $this->db->where("Estado","Activo");
       $resultados = $this->db->get("sexo");
       return $resultados->result();

    }
    public function getroles (){
        $this->db->where("Estado","Activo");
       $resultados = $this->db->get("rol");
       return $resultados->result();

    }
    public function getprofesion (){
        $this->db->where("Estado","Activo");
       $resultados = $this->db->get("profesion");
       return $resultados->result();

    }
    public function new_personal ($IdPersonal){
    
        $this->db->where("IdPersonal",$IdPersonal);
       $resultados = $this->db->get("personal");
       return $resultados->row();

    }
    
    // consulta para para insertar un nuevo usuario a la base de datos 
    public function save($data){
        return $this->db->insert("personal",$data);
    }
    public function update($IdPersonal,$data){
        $this->db->where("IdPersonal",$IdPersonal);
        return $this->db->update("personal",$data);
    }
    
}
