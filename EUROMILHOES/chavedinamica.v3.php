<?php 
// consumir um serviço em JSON

$nchaveJSON = file_get_contents("http://localhost/SIR1819/EI_PL_A/EUROMILHOES/gerador.php");
$nchavePHP = json_decode($nchaveJSON);

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
            <?php
                foreach($nchavePHP->estrelas as $estrela) {
                    echo "<li>".$estrela."</li>";
                }
            ?>
        </ul>
        <ul class="numeros">
            <?php
                foreach($nchavePHP->numeros as $numero) {
                    echo "<li>".$numero."</li>";
                }
            ?>
        </ul>
        </div>
    </body>
</html>