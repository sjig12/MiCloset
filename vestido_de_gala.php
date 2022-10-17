<!DOCTYPE html>
<html>
    <head>
        <title>Vestidos de Gala</title>
    </head>
    
    <body style="background-color: rgb(0, 0, 0);">
        <h1>PONTE ESTE:</h1>
        
        <?php
            $numero = rand(1,6);
        ?>

        <center>
            <img src="./img/vestidos/gala/<?php echo $numero?>-min.jpg" width="45%" height="45%">
                <a href="vestido_de_gala.php">
                <br><br>
                <button class="otro" style="background-color: white; color: black"> Otro</button>
                </a>
        </center>
        <a class="atras" href="vestidos.html" style="color: white;">REGRESAR</a> 
    </body>
</html>