<h1>Lista de Platos</h1>
<?php

    //Conexión con base de datos
    require './database/db_connect.php';
    $mysqli = conectar();

    //Consulta BBDD
    $resultado = $mysqli->query("SELECT id, titulo FROM plato");

    //Imprime resultado
    echo '<ol>';
    while($reg=$resultado->fetch_assoc()){
        echo '<li>';
        echo '<a href="https://phpfirstappghacademy.herokuapp.com/PHP04/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
        echo '</li>';
    }
    echo '</ol>';

?>