
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    require('./db_connect/db_connect.php');
    conexion();

    createTable();

    include_once './template/header.php';
    include_once './template/body.php';
    include_once './template/footer.php';
        
    ?>

</body>
</html>