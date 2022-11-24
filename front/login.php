<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Banco de la Nacion Argentina</title>
</head>
     <body class = "fondo">
            <form action="../backend/loguear.php" method="POST">
                <section class="form-login">
                    <h5>Banco Nacion</h5>
                    <input class="controls" type="text" name="usuario" value="" placeholder="Escriba su usuario">
                    <input class="controls" type="password" name="clave" value="" placeholder="Escriba su clave">
                    <input class="buttons" type="submit" name="Entrar" value="Entrar">
                    <p><a href="#">¿Olvidastes tu Contraseña?</a></p>
                </section>
            </form>
        </body>
</html>

<!-- login y formulario -->