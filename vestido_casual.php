<!DOCTYPE html>
<html>
    <head>
        <title>Vestidos casuales</title>
    </head>
    
    <body style="background-color: rgb(133, 105, 170);">
        <h1>PONTE ESTE:</h1>
        
        <?php
            $numero = rand(1,14);
        ?>

        <center>
            <img src="./img/vestidos/ksual/<?php echo $numero?>.jpg" width="45%" height="45%">
                <a href="vestido_casual.php">
                <br><br>
                    <button class="otro" style="background-color: #9e82e4; color: white"> Otra</button>
                </a>
        </center>
        <a class="atras" href="vestidos.html" style="color: white;">REGRESAR</a>
    </body>
</html>