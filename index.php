<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    <form action="login.php" method="POST">
        <label>Usuario</label>
        <br>
        <input type="text" name="usuario" required>
        <br>
        <br>
        <label>Contraseña</label>
        <br>
        <input type="text" name="password" required>
        <br>
        <br>
        <input type="submit" value="Entrar">
    </form>

    <?php if ( isset( $_GET['login'] ) ): ?>
        <h1>Datos incorrectos</h1>
    <?php endif; ?>
</body>
</html>
