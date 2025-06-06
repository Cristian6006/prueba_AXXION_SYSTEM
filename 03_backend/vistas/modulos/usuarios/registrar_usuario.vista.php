<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Registrar Usuario</h1>


        <div>
            <label>Nombres</label>
            <input type="text" name="usuario_nombres" required>
        </div>

        <div>
            <label>Apellidos</label>
            <input type="text" name="usuario_apellidos" required>
        </div>

        <div>
            <label>Identificación</label>
            <input type="text" name="usuario_identificador" required>
        </div>

        <div>
            <label>Correo</label>
            <input type="email" name="usuario_email" required>
        </div>

        <div>
            <label>Contraseña</label>
            <input type="password" name="usuario_pass" required>
        </div>

        <div>
            <label>Estado</label>
            <input type="text" name="usuario_estado" required>
        </div>

<div>
    <label for="rol_codigo">Rol</label>
    <select name="rol_codigo" required>
        <option value="">Seleccione un rol</option>
        <option value="1">Administrador</option>
        <option value="2">Supervisor</option>
        <option value="3">Técnico</option>
    </select>
</div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>


</body>
</html>
