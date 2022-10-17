<!DOCTYPE html>
<html>
    <head>
        <title>Para Eventos</title>
    </head>
    
    <body style="background-color:  rgb(149, 165, 200);">
        <h1>PONTE ESTE:</h1>
        
        <?php
            $numero = rand(1,8);
        ?>

        <center>
            <img src="./img/vestidos/evento/<?php echo $numero?>-min.jpg" width="45%" height="45%">
                <a href="vestido_evento.php">
                <br><br>
                    <button class="otro" style="background-color: #9e82e4; color: white"> Otro</button>
                </a>
        </center>
        <a class="atras" href="vestidos.html" style="color: white;">REGRESAR</a> 
    </body>
</html>