<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../front/css/style.css">
    <title>Usuario o clave incorrecto</title>
</head>

     <body class = "fondo">
            <form action="../backend/loguear.php" method="POST">
                <section class="form-login">
                <?php
                    echo "<h1>USUARIO O CLAVE INCORRECTO</h1>";
                    echo "<a href='../front/login.php'> Volver</a>";
                 ?>
                </section>
            </form>
            
        </body>
    
</html>