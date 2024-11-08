<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Ingreso</title>
</head>

<body>
    <form id="formIngreso" name="formIngreso" action="index.php?c=registros&a=ControllerGuardar" method="POST">

        <label>Ingrese codigo:</label>
        <input id="codigo" name="codigo" type="number" placeholder="Ingrese codigo estudiante" required>

        <br>
        <br>

        <label>Ingrese nombre:</label>
        <input id="nombre" name="nombre" type="text" placeholder="Ingrese nombre estudiante" required>

        <br>
        <br>

        <label>Ingrese programa:</label>
        <input id="programa" name="programa" type="text" placeholder="Ingrese programa" required>

        <br>
        <br>

        <label for="dia">Seleccione un día:</label>
        <select id="dia" name="dia">
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miércoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
            <option value="sabado">Sábado</option>
        </select>

        <br>
        <br>

        <label>Ingrese hora:</label>
        <input id="hora" name="hora" type="time" placeholder="Ingrese hora de ingreso" required>

        <br>
        <br>

        <label>Ingrese sala:</label>
        <input id="sala" name="sala" type="text" placeholder="Ingrese sala a ingresar" required>

        <br>
        <br>

        <label>Ingrese nombre responsable:</label>
        <input id="responsable" name="responsable" type="text" placeholder="Ingrese nombre del responsable" required>

        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>


</body>

</html>