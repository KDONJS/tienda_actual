<?php

class MySQLdb {

    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "ecommerce";
    private $port = "";
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect( 
        $this->host,
        $this->usuario,
        $this->clave,
        $this->db
    );

    if (mysqli_connect_errno()) {
        printf("error al conectar la base de datos %s", mysqli_connect_errno());
        exit();
    }else {
        //print "Todo correcto <br>";
    }

    if(!mysqli_set_charset($this->conn, "utf8")){
        printf("los caracteres no son correctos %s", mysqli_connect_errno());
        exit();
    }else{
        //print "Todo correcto en los caracteres tambien";
    }

    }

    function query($sql){
        $data = array();
        $r = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($r)>0) {
            $data = mysqli_fetch_assoc($r);
        }
        return $data;
    }


    function queryNoSelect($sql){
        $r = mysqli_query($this->conn, $sql);
        return $r;
    }
    
}

?>