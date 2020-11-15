<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
    // Consulta para traer datos de la tabla tipo cliente para el combo 
    public function gettdcliente(){
        $resultado = $this->db->get("tipocliente");
        return $resultado->result();
    }
    //cliente Natural
// Consulta para traer a todos que tengan el estado activo 
    public function getCliente ()
    {
        $this->db->select("cl.IdCliente, cl.Nombre,
        cl.Direccion, cl.Telefono, cl.Nit, cl.Gmail, tc.Nombre AS TipoCliente, cl.Estado
         FROM cliente AS cl INNER  JOIN tipocliente AS tc ON  tc.IdTipoCliente=cl.IdTipoCliente WHERE cl.Estado='Activo'");
        $resultado = $this->db->get();
        return $resultado->result();
    }

// Consulta para traer a todos que tengan el estado activo 
    public function getnatural ()
    {
        $this->db->select("cl.IdCliente, cl.Nombre,
        cl.Direccion, cl.Telefono, cl.Nit, cl.Gmail, tc.Nombre AS TipoCliente, cl.Estado
         FROM cliente AS cl INNER  JOIN tipocliente AS tc ON  tc.IdTipoCliente=cl.IdTipoCliente WHERE (cl.Estado='Activo' AND  cl.IdTipoCliente='1')");
        $resultado = $this->db->get();
        return $resultado->result();
    }
//   cliente juridico
    //Consulta para traer a todos que tengan el estado activo 
    public function getjuridico ()
    {
        $this->db->select("cl.IdCliente, cl.Nombre,
        cl.Direccion, cl.Telefono, cl.Nit, cl.Gmail, tc.Nombre AS TipoCliente, cl.Estado
         FROM cliente AS cl INNER  JOIN tipocliente AS tc ON  tc.IdTipoCliente=cl.IdTipoCliente WHERE (cl.Estado='Activo' AND  cl.IdTipoCliente='2')");
        $resultado = $this->db->get();
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("cliente",$data);
    }
    // Consulta que lleva datos de la lista para editarlo a la fila seleccionada
    public function new_cliente($IdCliente){
        $this->db->where("IdCliente",$IdCliente);
        $resultado = $this->db->get("cliente");
        return $resultado->row();
    }
    // Consulta que me compara si la id que voy a modicar es igual a la de la base de datos 
    public function update($IdCliente,$data){
        $this->db->where("IdCliente",$IdCliente);
        return $this->db->update("cliente",$data);
    }

}