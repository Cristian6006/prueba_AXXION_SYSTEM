<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
    <form action="" method="POST">
    <h1>Actualizar Usuario</h1>
        <div >
            <label for="">Codigo de rol:</label>
            <input type="text" name="rol_codigo" value="<?php echo $userId->getRolCodigo(); ?>">
            <br><br>
        </div>

        <div >
            <label for="">Codigo de usuario:</label>
            <input type="text" name="usuario_codigo" value="<?php echo $userId->getUsuarioCodigo(); ?>">
            <br><br>
        </div>

        <div>
            <label for="">Nombres:</label>
            <input type="text" name="usuario_nombres" value="<?php echo $userId->getUsuarioNombres(); ?>">
            <br><br>
        </div>
        <div>
            <label for="">Apellidos:</label>
            <input type="text" name="usuario_apellidos" value="<?php echo $userId->getUsuarioApellidos(); ?>">
            <br><br>
        </div>
        <div>
            <label for="">Identificacion:</label>
            <input type="text" name="usuario_identificador" value="<?php echo $userId->getUsuarioIdentificacion(); ?>">
            <br><br>
        </div>
        <div>
            <label for="">Correo:</label>
            <input type="text" name="usuario_email" value="<?php echo $userId->getUsuarioEmail(); ?>">
            <br><br>
        </div>
        <div hidden>
            <label for="">Contraseña:</label>
            <input type="text" name="usuario_pass" value="<?php echo $userId->getUsuarioPass(); ?>">
            <br><br>
        </div>
        <div>
            <label for="">Estado:</label>
            <input type="text" name="usuario_estado" value="<?php echo $userId->getUsuarioEstado(); ?>">
            <br><br>
        </div>
        <div>
            <br><br>
            <input type="submit" value="Actualizar">
        </div>
    </form>
</body>
</html>