<?php

class LoginModelo
{

    private $db;

    function __construct()
    {
        $this->db = new MySQLdb();
    }

    function insertarRegistro($data)
    {

        $r = false;

        if($this->validaCorreo($data["correo"])){
            $clave = hash_hmac("sha512",$data["clave"],"toptop");
            $sql = "INSERT INTO usuarios VALUES(0,";
            $sql .= "'".$data["nombre"]."',";
            $sql .= "'".$data["apellidom"]."',";
            $sql .= "'".$data["apellidop"]."',";
            $sql .= "'".$data["correo"]."',";
            $sql .= "'".$data["direccion"]."',";
            $sql .= "'".$data["ciudad"]."',";
            $sql .= "'".$data["distrito"]."',";
            $sql .= "'".$data["estado"]."',";
            $sql .= "'".$data["codpos"]."',";
            $sql .= "'".$data["pais"]."',";
            $sql .= "'".$clave."')";

            $r=$this->db->queryNoSelect($sql);


        }

        return $r;
        
    }

    function validaCorreo($correo)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '".$correo."'";
        $data = $this->db->query($sql);
        return (count($data)==0)?true:false;
    }

    function Verificar($usuario , $clave)
    {
        $errores = array();
        $sql = "SELECT * FROM usuarios WHERE email = '".$usuario."'";
        $clave = hash_hmac("sha512",$clave,"toptop");
        $clave = substr($clave,0,200);
        //consulta
        $data = $this->db->query($sql);
        //validacion

        if (empty($data)) {
            array_push($errores,"no existe usuario");
        } else if($clave !=$data["clave"]) {
            array_push($errores,"clave erronea");
        }

        return $errores;
        

        return (count($data)==0)?true:false;
    }

    function getUsuarioCorreo($correo)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '".$correo."'";
        $data = $this->db->query($sql);
        return $data;
    }

    function enviarCorreo($correo){
        $data = $this->getUsuarioCorreo($correo);

        $id = $data["id"];
        $nombre = $data["nombre"]." ".$data["apellidoMaterno"]." ".$data["apellidoPaterno"];
        $msg = $nombre.", entra al siguiente link para cambiar tu contraseña";
        $msg.="<a href='".RUTA."/login/cambiaclave/'>".$id."</a>";

        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type:text/html; charset=UTF-8\r\n"; 
        $headers .= "From: clubleones\r\n"; 
        $headers .= "Repaly-to: $correo\r\n";
    
        $asunto = "Cambiar clave de acceso";
    
        if (mail($correo,$asunto, $msg, $headers)) {
            print "ok";
        }else{
            print "error";
        }
    }
    

}


?>