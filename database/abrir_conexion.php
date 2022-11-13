<?php 
    $host="127.0.0.1"; /*Direccion de la IP*/
    $port=3306; // Puerto 3306 para base de datos.
    $socket=""; // Variables de entorno
    $user="root"; // Usuario
    $password=""; // Password
    $dbname="buscador"; //Nombre de la base de datos
    
    $tabla1 = "clientes";
    $tabla2 = "empleados";
    $tabla3 = "administradores";

    $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket);
    
    if($conexion -> connect_errno) {
        echo "El sitio experimenta fallos";
        exit();
    }

    /* Conexion simple a base de datos. Al trabajar con clases, es mejor usar PDO */
?>