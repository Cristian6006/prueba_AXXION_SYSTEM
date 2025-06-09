<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
</head>
<body>
    <h1>Consultar Roles</h1>
    <a href="?c=Usuarios&a=rolRegistrar">Registrar rol</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $rol): ?>
                <tr class="text-center">
                    <td><?php echo $rol->getRolCodigo(); ?></td>
                    <td><?php echo $rol->getRolNombre(); ?></td>
                    <td>
                        <a href="?c=Usuarios&a=rolActualizar&idRol=<?php echo $rol->getRolCodigo(); ?>">Actualizar</a>
                        <a href="?c=Usuarios&a=rolEliminar&idRol=<?php echo $rol->getrolCodigo(); ?>">Eliminar</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>