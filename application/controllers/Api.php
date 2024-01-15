<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

class Api extends RestController {

    public function __construct() {
        parent::__construct();
        // Cargar modelos u otras dependencias si es necesario
    }

    // Ejemplo de método GET
    public function saludo_get() {
        $data = array('mensaje' => '¡Hola, mundo!');
        $this->response($data, 200);
    }

    // Agrega más métodos según tus necesidades

}