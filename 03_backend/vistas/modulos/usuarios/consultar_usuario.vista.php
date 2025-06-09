<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuarios</title>
</head>
<body>
    <h1>Consultar Usuarios</h1>
    <a href="?c=Usuarios&a=usuarioRegistrar">Registrar usuario</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Código de rol</th>
                <th>Código de usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Id</th>
                <th>Correo</th>
                <th>Contrseña</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr class="text-center">
                    <td><?php echo $usuario->getRolCodigo(); ?></td>
                    <td><?php echo $usuario->getUsuarioCodigo(); ?></td>
                    <td><?php echo $usuario->getUsuarioNombres(); ?></td>
                    <td><?php echo $usuario->getUsuarioApellidos(); ?></td>
                    <td><?php echo $usuario->getUsuarioIdentificacion(); ?></td>
                    <td><?php echo $usuario->getUsuarioEmail(); ?></td>
                    <td><?php echo $usuario->getUsuarioPass(); ?></td>
                    <td><?php echo $usuario->getUsuarioEstado(); ?></td>
                    <td>
                        <a href="?c=Usuarios&a=usuarioActualizar&idUser=<?php echo $usuario->getUsuarioCodigo(); ?>">Actualizar</a>
                        <a href="?c=Usuarios&a=usuarioEliminar&idUser=<?php echo $usuario->getUsuarioCodigo(); ?>">Eliminar</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>