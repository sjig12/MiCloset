<!DOCTYPE html>
<html>
    <head>
        <title>Camisetas tranqui</title>
        <link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body style="background-color: EDA89A;">
        <h1>PONTE ESTO:</h1>
        
        <?php
            $numero = rand(1,36);
        ?>

        <center>
            <img src="./img/ksual/solo_camisetas/<?php echo $numero?>-min.jpg">
                <a href="solo_camisetas.php">
                <br><br>
                <button class="otro" style="background-color: #9e82e4; color: white;">Otra</button>
                </a>
        </center>

         <a class="atras" href="casual.html" style="color: black;">REGRESAR</a> 

    </body>
</html>