<?php 
    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="buscador";
    
    $tabla1 = "clientes";
    $tabla2 = "empleados";
    $tabla3 = "administradores";

    $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket);
    
    if($conexion -> connect_errno) {
        echo "El sitio experimenta fallos";
        exit();
    }
?>