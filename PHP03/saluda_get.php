<?php

    echo '¡Hola ' . htmlspecialchars($_GET["nombre"]) . '!';

    $_GET["nombre"] = 'Pedro';
    
    echo $_GET["nombre"];

    $_REQUEST["nombre"]='Jesús';

    echo $_GET["nombre"];

?>