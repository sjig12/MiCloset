<!DOCTYPE html>
<html>
    <head>
        <title>Pantalones</title>
        <link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body style="background-color: rgb(1, 11, 36);">
        <h1 style="color: white">PONTE ESTO:</h1>
        
        <?php
            $numero = rand(1,35);
        ?>

        <center>
            <img src="./img/ksual/pantalones/<?php echo $numero?>-min.jpg">
            <br><br>
            <a href="casual_pantalones.php">
                <button class="otro" style="background-color: #9e82e4; color: white">Otro</button>
            </a>
        </center>
        
        <a href="casual.html" style="color: white;">REGRESAR</a> 
    </body>
</html>