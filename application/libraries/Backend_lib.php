<?php
class Backend_lib{
    private $CI;
    public function __construct()
    {
        $this->CI= & get_instance();

    }

    public function control(){
        if (!$this->CI->session->userdata("login")) {
            redirect(base_url());
        }
        $url = $this->CI->uri->segment(1);
        if ($this->CI->uri->segment(2)) {
            $url =$this->CI->uri->segment(1)."/".$url =$this->CI->uri->segment(2);
        }

        $infomenu = $this->CI->Backend_model->getID($url);

        $permisos = $this->CI->Backend_model->getPermisos($infomenu->IdMenu,$this->CI->session->userdata("IdRol"));
        if ($permisos->Leer == 0) {
            redirect(base_url("dashboard"));
        }else{
            return $permisos;
        } 

    }
}