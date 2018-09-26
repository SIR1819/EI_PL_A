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
            <li> <?php echo rand(1,11); ?> </li>
            <li> <?php echo rand(1,11); ?> </li>
        </ul>
        <ul class="numeros">
            <li> <?php echo rand(1,50); ?> </li>
            <li> <?php echo rand(1,50); ?> </li>
            <li> <?php echo rand(1,50); ?> </li>
            <li> <?php echo rand(1,50); ?> </li>
            <li> <?php echo rand(1,50); ?> </li>
        </ul>
        </div>
    </body>
</html>