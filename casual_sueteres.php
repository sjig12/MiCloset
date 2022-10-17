<!DOCTYPE html>
<html>
    <head>
        <title>Invierno</title>
        <link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body style="background-color: rgb(1, 41, 68);">
        <h1 style="color: white">PONTE ESTO:</h1>
        
        <?php
            $numero = rand(1,40);
        ?>

        <center>
            <img src="./img/ksual/sueteres/<?php echo $numero?>-min.jpg" width="45%" height="45%">
            <br><br>
            <a href="casual_sueteres.php">
                <button class="otro" style="background-color: #9e82e4; color: white">Otro</button>
            </a>
        </center>
        <a class="atras" href="casual.html" style="color: white;">REGRESAR</a> 
    </body>
</html>