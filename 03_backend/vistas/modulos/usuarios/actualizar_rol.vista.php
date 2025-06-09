<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar rol</title>
</head>
<body>
    <form action="" method="POST">
    <h1>Actualizar rol</h1>
        <div hidden>
            <label for="">Codigo rol:</label>
            <input type="text" name="rol_codigo" value="<?php echo $rolId->getRolCodigo(); ?>">
            <br><br>
        </div>
        <div>
            <label for="">Nombre rol:</label>
            <input type="text" name="rol_nombre" value="<?php echo $rolId->getRolNombre(); ?>">
        </div>
        <div>
            <br><br>
            <input type="submit" value="Actualizar">
        </div>
    </form>
</body>
</html>