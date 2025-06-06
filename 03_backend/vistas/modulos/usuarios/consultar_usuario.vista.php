<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios</title>
</head>
<body>
    <h1>Consultar Usuarios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Id</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr class="text-center">
                    <td><?php echo $usuario->getUsuarioCodigo(); ?></td>
                    <td><?php echo $usuario->getUsuarioNombres(); ?></td>
                    <td><?php echo $usuario->getUsuarioApellidos(); ?></td>
                    <td><?php echo $usuario->getUsuarioIdentificacion(); ?></td>
                    <td><?php echo $usuario->getUsuarioEmail(); ?></td>
                    <td><?php echo $usuario->getUsuarioEstado(); ?></td>
                    <td>
                        <a href="?c=Usuario&a=rolActualizae&idRol" <?php echo $usuario->getRolCodigo(); ?>>Actualizar</a>
                        <a href="?c=Usuario&a=rolEliminar&idRol" <?php echo $usuario->getrolCodigo(); ?>>Eliminar</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <a href="vistas/modulos/usuarios/registrar_usuario.vista.php">Registrar usuario</a>
</body>
</html>