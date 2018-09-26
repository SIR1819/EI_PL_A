<?php 
include_once("gerachave.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Euromilhões</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="chave.css"/>
    </head>
    <body>
        <h1>Euromilhões</h1>
        <div>
        <ul class="estrelas">
            <li> <?php echo $estrelas_array[0]; ?> </li>
            <li> <?php echo $estrelas_array[1]; ?> </li>
        </ul>
        <ul class="numeros">
            <li> <?php echo $numeros_array[0]; ?> </li>
            <li> <?php echo $numeros_array[1]; ?> </li>
            <li> <?php echo $numeros_array[2]; ?> </li>
            <li> <?php echo $numeros_array[3]; ?> </li>
            <li> <?php echo $numeros_array[4]; ?> </li>
        </ul>
        </div>
    </body>
</html>