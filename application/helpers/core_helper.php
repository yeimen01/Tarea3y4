<?php

class Clientes{

    static function guardar($clientes){

        $CI =& get_instance();
        $CI->db->insert('clientes',$clientes);
        
    }
}
class Vehiculos{

    static function guardar($vehiculos){
        $CI =& get_instance();
        if(isset($vehiculos ['id']) && $vehiculos['id'] > 0 ){
            $CI->db->where('id', $vehiculos['id']);
            $CI->db->update('vehiculos', $vehiculos);

        }else{
            var_dump($vehiculos); exit();
        }

        
    }

    static function listado_vehiculos(){
        $CI =& get_instance();
        $rs = $CI->db->get('vehiculos')->result();
        
        return $rs;
    }

    static function vehiculo_x_id($id){
        $CI =& get_instance();
        $CI->db->where('id',$id);
        $rs = $CI->db->get('vehiculos')->result(); 
        return $rs;
    }

    static function vender_vehi($vehi){
        $CI =& get_instance();
        $contrato = "";
        if (isset($vehi['id']) && $vehi['id'] > 0) {
            $contrato = $vehi['cedula'] . $vehi['matricula'] . rand(1,300);
            $sql_delete = "delete from vehiculos where id=?";
            $sql_insert = "INSERT INTO ventas 
            VALUES ({$vehi['id']}, '{$vehi['cedula']}', '{$vehi['matricula']}', '{$vehi['marca']}', 
            '{$vehi['modelo']}', '{$vehi['precio']}', '{$contrato}');";
            $CI->db->query($sql_insert);
            $CI->db->query($sql_delete, $vehi['id']);
        }else{
            echo "<script> alert('Dis is a macaco fuerte')</script>";
            exit();
        }
        echo "<script> alert('Compra exitosa\\n El Monto Total fue de: {$vehi['precio']}\\n Si acepta la compra el codigo de su contrato es: {$contrato}') </script>";
    }
}

class core_reportes{
    static function cantidad_total(){
        $CI =& get_instance();
        $sql = "SELECT SUM(precio_vehi) as total FROM ventas";
        $rs = $CI->db->query($sql)->result();
        return $rs;
    }
    static function cantidad_deventa(){
        $CI =& get_instance();
        $sql = "SELECT COUNT(*) as total FROM ventas";
        $rs = $CI->db->query($sql)->result();
        return $rs;
    }
}

class Usuario{

    static function guardar($usuarios){
        $CI =& get_instance();
        if(isset($usuarios ['id']) && $usuarios['id'] > 0 ){
            $CI->db->where('id', $usuarios['id']);
            $CI->db->update('usuario', $usuarios);

        }else{
            var_dump($usuarios); exit();
        }

        
    }

    static function listado_usuario(){
        $CI =& get_instance();
        $rs = $CI->db->get('usuario')->result();
        
        return $rs;
    }

    static function persona_x_id($id){
        $CI =& get_instance();
        $CI->db->where('id',$id);
        $rs = $CI->db->get('usuario')->result(); 
        return $rs;
    }
}

class core_usuarios{
    static function grafico_marca(){
        $CI =& get_instance();
        $sql = "Select marca, Count(*) as cantidad From vehiculos Group By marca";
        $rs = $CI->db->query($sql)->result();
        return $rs;
    }
    static function grafico_modelo(){
        $CI =& get_instance();
        $sql = "Select modelo, Count(*) as cantidad From vehiculos Group By modelo";
        $rs = $CI->db->query($sql)->result();
        return $rs;
    }
}