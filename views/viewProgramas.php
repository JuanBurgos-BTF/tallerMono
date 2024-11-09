<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombres de los programas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php

                foreach ($data['programas'] as $dato) {
                    echo '<tr>';
                    echo '<td>' . $dato['nombre'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <button><a href="index.php?c=registros&a=index">Volver</a></button>
</body>

<link rel="stylesheet" href="assets/estilos.css">

</html>