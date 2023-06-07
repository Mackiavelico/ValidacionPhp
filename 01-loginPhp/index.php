<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>

<body>
    <form action="validacion.php" method="POST">
    <table class="cuadro">
        <tr>
            <td>
                <!--Inicio de sesión--->
                <input type="text" name=usuario placeholder="Ingrese Usuario"><br><br>
                <input type="password" name="pass" placeholder="Clave"><br><br>
                <input type="submit" name="enviar" value="Enviar"> 
            </td>
        </tr>
    </table>
    </form>

</body>

</html>