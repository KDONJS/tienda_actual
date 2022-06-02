<?php

class Login extends Controlador
{
    private $modelo;

    function __construct()
    {
        $this->modelo = $this->modelo("LoginModelo");
    }

    function caratula(){

        if (isset($_COOKIE["datos"])) {
            $datos_array = explode("|",$_COOKIE["datos"]);
            $usuario = $datos_array[0];
            $clave = $datos_array[1];
        }

       $datos = [
        "titulo" => "Login",
        "menu" => false
       ];
       $this->vista("loginVista",$datos);
    }

    function olvido(){
        $errores = array();
        $data = array();
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $correo = isset($_POST["correo"])?$_POST["correo"]:"";
            if($correo==""){
                array_push($errores,"el correo es obligatorio");
            }
            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                array_push($errores,"El correo ingresado no es valido");
            }
        if (count($errores)==0) {
                if ($this->modelo->validaCorreo($correo)) {
                    array_push($errores,"El correo no existe");
                }else{
                    $this->modelo->enviarCorreo($correo);
                }
            }
        }else{
            $datos = [
                "titulo" => "Recuperar contraseña",
                "menu" => false,
                "error" => [],
                "data" => [],
                "subtitulo"=>"¿Olvidaste tu contraseña?",
                "texto"=>"Cambie su contraseña en tres sencillos pasos. Esto ayuda a mantener segura su nueva contraseña."
               ];
               $this->vista("Recuperar",$datos);
        }
        if (count($errores)) {
            $datos = [
                "titulo" => "Olvido clave de acceso",
                "menu" => false,
                "error" => $errores,
                "data" => [],
                "subtitulo"=>"¿Olvidaste tu contraseña?",
                "texto"=>"Cambie su contraseña en tres sencillos pasos. Esto ayuda a mantener segura su nueva contraseña."
               ];
               $this->vista("Recuperar",$datos);
        }
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
                $datos = [
                    "titulo" => "Bienvenido a la tienda virtual",
                    "menu" => false,
                    "error" => [],
                    "data" => [],
                    "subtitulo"=>"Bienvebido a nuestra tienda",
                    "texto"=>"Gracias por su registro",
                    "color"=>"alert-success",
                    "url"=>"menu",
                    "colorBoton"=>"btn-success",
                    "textoBoton"=>"Iniciar sesion"
                   ];
                   $this->vista("MensajeVista",$datos);
               }else{
                $datos = [
                    "titulo" => "Error en el registro",
                    "menu" => false,
                    "error" => [],
                    "data" => [],
                    "subtitulo"=>"Por favor intentalo nuevamente",
                    "texto"=>"Gracias por la comprension",
                    "color"=>"alert-danger",
                    "url"=>"Registro",
                    "colorBoton"=>"btn-danger",
                    "textoBoton"=>"Volver a registrar"
                   ];
                   $this->vista("MensajeVista",$datos);
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


     function Verifica(){

        $errores = array();

        $valor = "";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
            $clave = isset($_POST["clave"])?$_POST["clave"]:"";
            $recordar = isset($_POST["recordar"])?"on":"off";
            $errores = $this->modelo->Verificar($usuario, $clave);

            //recuerdame

            if ($recordar == "on") {
                $valor = $usuario."|".$clave;
                $fecha = time()+(60*60*24*7*2);
            }else{
                $fecha = time() -1;
            }

            setcookie("datos",$valor,$fecha, RUTA);

            //

            $data = [
                "usuario" => $usuario,
                "clave" => $clave,
                "recordar" => $recordar
            ];

            //

            if (empty($errores)) {
                header("location:".RUTA."/tienda");
            } else {
                $datos = [
                    "titulo" => "Login",
                    "menu" => false,
                    "errores" => $errores,
                    "data" => $data
                  ];
                  $this->vista("loginVista",$datos);
            }
            
        }

     }

}

?>