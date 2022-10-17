<!DOCTYPE html>
<html>
    <head>
        <title>Falda-pantalon</title>
    </head>
    
    <body style="background-color: rgb(0, 0, 0)">
        <h1>PONTE ESTO:</h1>
        
        <?php
            $numero = rand(1,14);
        ?>

        <center>
            <img src="./img/formal/faldas/<?php echo $numero?>-min.jpg" width="45%" height="45%">
                <a href="formal_faldas.php">
                <br><br>
                <button class="otro" style="background-color: white; color: black"> Otra</button>
                </a>
        </center>
        <a class="atras" href="fancy.html" style="color: white;">REGRESAR</a> 
    </body>
</html>