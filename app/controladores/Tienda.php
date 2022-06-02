<?php

class Tienda extends Controlador
{
    private $modelo;

    function __construct()
    {
        $this->modelo = $this->modelo("TiendaModelo");
    }

    function caratula(){
       $datos = [
        "titulo" => "Bienvenido club leones legado y linaje"
       ];
       $this->vista("TiendaVista",$datos);
    }
}

?>