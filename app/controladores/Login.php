<?php

class Login extends Controlador
{
    private $modelo;

    function __construct()
    {
        $this->modelo = $this->modelo("LoginModelo");
    }

    function caratula(){
       $datos = [
        "titulo" => "Login",
        "menu" => false
       ];
       $this->vista("loginVista",$datos);
    }

    function olvido(){
        $datos = [
         "titulo" => "Recuperar-contraseña",
         "menu" => false
        ];
        $this->vista("Recuperar",$datos);
     }

    function registro(){

        if ($_SERVER['REQUEST_METHOD']=="POST") {
            $errores = array();
            $data = array();
            $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
            $apellidom = isset($_POST["apellidom"])?$_POST["apellidom"]:"";
            $apellidop = isset($_POST["apellidop"])?$_POST["apellidop"]:"";
            $correo = isset($_POST["correo"])?$_POST["correo"]:"";
            $direccion = isset($_POST["direccion"])?$_POST["direccion"]:"";
            $estado = isset($_POST["estado"])?$_POST["estado"]:"";
            $distrito = isset($_POST["distrito"])?$_POST["distrito"]:"";
            $codpos = isset($_POST["codpos"])?$_POST["codpos"]:"";
            $pais = isset($_POST["pais"])?$_POST["pais"]:"";
            $ciudad = isset($_POST["ciudad"])?$_POST["ciudad"]:"";
            $clave = isset($_POST["clave"])?$_POST["clave"]:"";
            $clave2 = isset($_POST["clave2"])?$_POST["clave2"]:"";
            $data = [
                "nombre" => $nombre,
                "apellidom"=>$apellidom,
                "apellidop"=>$apellidop,
                "correo"=>$correo,
                "direccion"=>$direccion,
                "estado"=>$estado,
                "distrito"=>$distrito,
                "codpos" => $codpos,
                "ciudad" => $ciudad,
                "pais" => $pais,
                "clave"=>$clave,
                "clave2"=>$clave2
             ];


            //validacion

            if ($nombre=="") {
                array_push($errores,"el nombre es obligatorio");
            }if($apellidom==""){
                array_push($errores,"el apellido materno es obligatorio");
            }if($apellidop==""){
                array_push($errores,"el apellido paterno es obligatorio");
            }if($correo==""){
                array_push($errores,"el correo es obligatorio");
            }if($direccion==""){
                array_push($errores,"la dirección es obligatoria");
            }if($estado==""){
                array_push($errores,"el estado es obligatorio");
            }if($distrito==""){
                array_push($errores,"el distrito es obligatorio");
            }if($ciudad==""){
                array_push($errores,"la ciudad es obligatoria");
            }if($codpos==""){
                array_push($errores,"el codigo postal es obligatorio");
            }if($pais==""){
                array_push($errores,"el pais es obligatorio");
            }if($clave==""){
                array_push($errores,"la clave es obligatoria");
            }if($clave2==""){
                array_push($errores,"repite la clave");
            }
            if($clave!=$clave2){
                array_push($errores,"las contraseñas ingresadas no coinciden");
            }

            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                array_push($errores,"El correo ingresado no es valido");
            }

            //validando que no hay errorres para guardar los datos

            if (count($errores)==0) {
                
               $r = $this->modelo->insertarRegistro($data);

               if($r){
                   print "se inserto bien";
               }else{
                   print "oe mongol aslo bien";
               }

            }else{
                 $datos = [
                "titulo" => "Registro de usuario",
                "menu" => false,
                "error" => $errores,
                "data" => $data
               ];
               $this->vista("Registro",$datos);
            }

        } else {
            $datos = [
                "titulo" => "Registro de usuario",
                "menu" => false
               ];
               $this->vista("Registro",$datos);
        }
        
     }

}

?>