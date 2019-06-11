<?php

class Queries extends CI_Model{

    public function insertImage($data){
        return $this->db->insert('vehiculos', $data);
    }
}
?>