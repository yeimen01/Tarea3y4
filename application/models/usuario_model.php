<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function __construct(){

        parent::__construct();
    }
    
    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $nombre_tabla= $this->db->get('usuario');

        if($nombre_tabla->num_rows()>0){
            
            return true;
            
        }else{

            return false;
        }
        
    }

}

/* End of file ModelName.php */
