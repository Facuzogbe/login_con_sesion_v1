<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bienvenido</title>
</head>

     <body class = "fondo">
            <form action="../backend/loguear.php" method="POST">
                <section class="form-login">
                <?php
                    session_start();
                    $usuario = $_SESSION['username'];
                    if($usuario != 'username'){
                        session_destroy();
                    }
                    echo "<h1> Bienvenido $usuario a su Home banking <br> <br> </h1>";
                    echo "<h2> Su saldo es de  $50 pesos argentinos<br> </h2>";
                    echo "<a class= buttons href='../backend/salir.php'> Cerrar Sesion</a>";
                    exit()
                 ?>

                 <!-- corregir esta logica para que la sesion se destruya cuando se pulga el boton salir -->
                </section>
            </form>
            
        </body>
    
</html>