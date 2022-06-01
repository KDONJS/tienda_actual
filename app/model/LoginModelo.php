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


    function enviarCorreo($correo){
        print $correo;
    }

}


?>