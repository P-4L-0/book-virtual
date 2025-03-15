<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="../php/routes.php/register">
            <fieldset>
                <label>Nombres</label>
                <input name="nombre" type="text" required>
            </fieldset>
            <fieldset>
                <label>Apellidos</label>
                <input name="apellido" type="text" required>
            </fieldset>
            <fieldset>
                <label>Correo Electrónico</label>
                <input name="correo" type="email" required>
            </fieldset>

            <fieldset>
                <label>Género</label>
                <select name="genero" required>
                    <option value="">Seleccione...</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </fieldset>

            <fieldset>
                <label>Dirección</label>
                <input name="direccion" type="text" required>
            </fieldset>
            <fieldset>
                <label>Teléfono</label>
                <input name="telefono" type="tel" pattern="[0-9]{8,}" required>
            </fieldset>
            <fieldset>
                <label>Tarjeta de circulación</label>
                <input name="tarjeta" type="text" required>
            </fieldset>
            <fieldset>
                <label>DUI</label>
                <input name="dui" type="text" pattern="[0-9]{9}" required>
            </fieldset>
            <fieldset>
                <label>Fecha de nacimiento</label>
                <input name="nacimiento" type="date" required>
            </fieldset>
            <fieldset>
                <label>Contraseña</label>
                <input type="password" name="contra" required>
            </fieldset>

            <fieldset>
                <button type="button" onclick="location.href='../views/index.html';">Regresar</button>
            </fieldset>
            <fieldset>
                <button name="register" type="submit">Registrarse</button>
            </fieldset>
        </form>
    </div>
</body>
</html>