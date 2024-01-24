<!DOCTYPE html>
<html lang="en">
    <!--login principal-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" href="image/LogoPazstor.ico">
    </head>
    <body>
        <div class="box">
            <h2>QualiZap MiPazstor</h2>
            <form id="" action="validarUsuario.php" method="POST" >
                <div class="inputbox">
                    <input name="usuario" type="text" autocomplete="off" required>
                    <label>Usuario</label>
                </div>
                <div class="inputbox">
                    <input name="passwords" type="password" class="" required>
                    <label>Contraseña</label>
                </div>
                <br>
                <input type="submit"  value="Entrar">
                <!--<a href="logUsuario.html">Agregar Usuario</a>-->
            </form>
        </div>
    </body>
</html>