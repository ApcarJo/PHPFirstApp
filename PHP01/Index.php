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
        $arrayMenu = array(
            "Plato" => array(
                "Title" => "Paella Valenciana", 
                "Diners" => "4", 
                "Entrante", 
                "Ingredientes" => array(
                    "arroz", 
                    "bajoqueta", 
                    "garrofón", 
                    "pollo", 
                    "conejo", 
                    "tomate")),

            "Plato" => array(
                "Title" =>"Carrillera", 
                "Diners" => "2", 
                "Principal", 
                "Ingredientes" => array(
                    "cerdo", 
                    "cebolla", 
                    "pimiento rojo", 
                    "zanahoria", 
                    "ternera", 
                    "tomate")),

            "Plato" => array(
                "Title" => "Brownie", 
                "Diners"=> "1", 
                "Postre", 
                "Ingredientes" => array(
                    "Cacao", 
                    "Helado vainilla", 
                    "harina", 
                    "huevo", 
                    "aceitunlecheas"))
        );

        // var_dump($arrayMenu);

        // foreach ($results as $arrayMenu)
        echo $arrayMenu['1']['Ingredientes'][1];

        foreach ($res as $arrayMenu){
            echo $res;
        }
    ?>

</body>
</html>