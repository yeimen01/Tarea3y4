<?php

class login{

    public static $instance;


    public static function aplicar(){

        self::$instance = new login();

    }

    public function __construct(){

        $CI =& get_instance();
        $CI->load->view('login/encabezado');

    }

    public function __destruct(){

        $CI =& get_instance();
        $CI->load->view('login/pie');

    }


}