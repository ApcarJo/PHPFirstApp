
<?php

function conexion(){

    $mysqli = new mysqli("localhost:3330", "root", "", "restaurante");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" .
            $mysqli->connect_errno . ") " .
            $mysqli->connect_error;
        } else {
            echo "se ha conectado a la base de datos";
        }
};

function createTable () {
    echo "he entrado en createTable";
    $mysqli->query("CREATE TABLE test(id INT);");
    // if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    // !$mysqli->query("CREATE TABLE test(id INT)") ||
    // !$mysqli->query("INSERT INTO test(id) VALUES
    // (1)")) {
    // echo "Falló la creación de la tabla: (" .
    // $mysqli->errno . ") " . $mysqli->error;
    // } else {
    //     echo "tabla creada";
    // }

};
?>