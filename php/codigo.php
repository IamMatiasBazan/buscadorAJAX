<?php 
    include("../database/abrir_conexion.php");

    $accion = $_POST['accion'];

    echo '
        <table class="table table-hover">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">DNI</th>
                <th scope="col">EMAIL</th>
            </tr>
    ';

    if($accion == 4) {
        $mi_busqueda = $_POST['mi_busqueda'];

        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla1 WHERE nombre LIKE '%$mi_busqueda%'");
        while($consulta = mysqli_fetch_array($resultados)) {
            echo '
                <tr>
                    <td>'.$consulta['id'].'</td>
                    <td>'.$consulta['nombre'].'</td>
                    <td>'.$consulta['apellido'].'</td>
                    <td>'.$consulta['dni'].'</td>
                    <td>'.$consulta['email'].'</td>
                </tr>
            ';
        }        
    } else {
        switch($accion) {
            case 1:
                $tabla = $tabla1;
            break;
            case 2:
                $tabla = $tabla2;
            break;
            case 3:
                $tabla = $tabla3;
            break;
        }    
    
        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla");
        while($consulta = mysqli_fetch_array($resultados)) {
            echo '
                <tr>
                    <td>'.$consulta['id'].'</td>
                    <td>'.$consulta['nombre'].'</td>
                    <td>'.$consulta['apellido'].'</td>
                    <td>'.$consulta['dni'].'</td>
                    <td>'.$consulta['email'].'</td>
                </tr>
            ';
        }
    
        echo '</table>';
    }
?>