<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <a href="?c=Usuarios&a=usuarioConsultar">Volver</a>

    <form action="" method="POST">
        <h1>Registrar Usuario</h1>


        <div>
            <label>Nombres</label>
            <input type="text" name="usuario_nombres" required>
            <br><br>
        </div>

        <div>
            <label>Apellidos</label>
            <input type="text" name="usuario_apellidos" required>
            <br><br>
        </div>

        <div>
            <label>Identificación</label>
            <input type="number" name="usuario_identificador" required>
            <br><br>
        </div>

        <div>
            <label>Correo</label>
            <input type="email" name="usuario_email" required>
            <br><br>
        </div>

        <div>
            <label>Contraseña</label>
            <input type="password" name="usuario_pass" required>
            <br><br>
        </div>

        <div>
            <label>Estado</label>
            <input type="text" name="usuario_estado" required>
            <br><br>
        </div>

<div>
    <label for="rol_codigo">Rol</label>
    <select name="rol_codigo" required>
    <option value="">Seleccione un rol</option>
    <option value="1">Admin</option>
    <option value="2">Cliente</option>
    <option value="3">Vendedor</option>
    <option value="4">Cajero 1</option>
    <option value="5">Cajero 2</option>
    <option value="6">Seguridad</option>
</select>

</div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>


</body>
</html>
