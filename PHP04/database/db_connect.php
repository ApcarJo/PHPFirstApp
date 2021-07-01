
<?php 

function conectar(){
    
    //Conexion con base de datos
    $mysqli = new mysqli("localhost:3330", "root","", "restaurante");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;

}

?>