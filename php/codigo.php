<?php 
    include("../database/abrir_conexion.php");

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

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla1");
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
?>