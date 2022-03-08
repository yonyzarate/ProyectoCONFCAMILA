<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

 	}
  
//consulta para verificar si el ususario logueado existe en la base de datos 
	public function login ( $nombreusuario, $contrasena)
	{
        $this->db->select("us.IdUsuario, us.NombreUsuario, us.Contrasena, CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Nombre,
        pe.IdPersonal, pe.IdRol, us.Estado
        FROM usuario AS us INNER JOIN personal AS pe ON pe.IdPersonal=us.IdPersonal
        WHERE us.NombreUsuario='$nombreusuario' AND us.Contrasena='$contrasena' ");

        $resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} 
		else{
			return false;
		}
        // $resultados =$this->db->get();
        // $result = $resultados->result();
        // return $result[0];
   
    }
    // Consulta para traer a todos que tengan el estado activo 
    public function getusuario ()
    {
       
        $this->db->select("us.IdUsuario , us.NombreUsuario, us.Contrasena,
         CONCAT(pe.Nombre,' ',pe.ApellidoPaterno,' ',pe.ApellidoMaterno) AS Personal,
        us.Estado FROM usuario AS us NATURAL JOIN personal AS pe WHERE us.Estado='Activo'");
        $resultado = $this->db->get();
        return $resultado->result();
    }
   // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("usuario",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function getusuarios ($IdUsuario){
        $this->db->where("IdUsuario",$IdUsuario);
        $resultados = $this->db->get("usuario");
        return $resultados->row();

    }
    // consulta que me trae la id y el nombre completo del personal para mostrarlo en el combo box o en seleccionar 
    public function getpersonall(){
        $this->db->select("IdPersonal,CONCAT(Nombre,' ',ApellidoPaterno,' ',ApellidoMaterno) AS NombreCompleto FROM personal where Estado='Activo';");
        $resultado =$this->db->get();
        return $resultado->result();

    }

    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdUsuario,$data){
        $this->db->where("IdUsuario",$IdUsuario);
        return $this->db->update("usuario",$data);
    }
}
