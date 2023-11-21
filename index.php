<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Presentacion Formulario (POST)</h1>
    <h2>ENVÍO DE DATOS:</h2>
    <form action="datos.php" method="POST">
        <div style="padding: 4px;">
            <label for="">NOMBRE (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="text" name="nombre" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">SEGUNDO NOMBRE (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="text" name="nombre2" required>
        </div>
        <div style="padding: 4px;">
            <label for="">APELLIDO (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="text" name="apellido" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">DOCUMENTO (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="number" name="dni" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">Correo electrónico (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="email" name="correo" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">Celular (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="number" name="mobile" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">Fecha de Nacimiento</label>
        </div>
        <div style="padding: 4px;">
            <input type="date" name="fecha" id="" required>
        </div>
        <div style="margin-top: 20px;">
            <input type="submit" value="ENVIAR">
            <input type="reset" value="BORRAR FORMULARIO">
        </div>
    </form>

    <h1>Presentacion Formulario (GET)</h1>
    <h2>ENVÍO DE DATOS:</h2>
    <form action="datos.php" method="GET">
        <div style="padding: 4px;">
            <label for="">NOMBRE (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="text" name="gnombre" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">SEGUNDO NOMBRE (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="text" name="gnombre2" required>
        </div>
        <div style="padding: 4px;">
            <label for="">APELLIDO (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="text" name="gapellido" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">DOCUMENTO (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="number" name="gdni" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">Correo electrónico (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="email" name="gcorreo" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">Celular (*)</label>
        </div>
        <div style="padding: 4px;">
            <input type="number" name="gmobile" id="" required>
        </div>
        <div style="padding: 4px;">
            <label for="">Fecha de Nacimiento</label>
        </div>
        <div style="padding: 4px;">
            <input type="date" name="gfecha" id="" required>
        </div>
        <div style="margin-top: 20px;">
            <input type="submit" value="ENVIAR">
            <input type="reset" value="BORRAR FORMULARIO">
        </div>
    </form>

</body>
</html>