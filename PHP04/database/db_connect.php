
<?php 

function conectar(){
    
    //Conexion con base de datos
    $mysqli = new mysqli("leu-cdbr-west-01.cleardb.com:3306", "bf72b266f64b28","9545b3e2", "heroku_5e016ea4b5826d3");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;

}

?>