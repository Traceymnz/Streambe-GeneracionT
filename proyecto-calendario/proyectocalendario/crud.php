<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];

    $stmt = $pdo->prepare("INSERT INTO evento (nombre,fecha) VALUES (?, ?)");

    if ($stmt->execute([$nombre, $fecha])) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error al insertar los datos en la base de datos.";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 >Calendario</h1>

<div class="barradeingreso">
    <form class="centrado"  action="crud.php"  method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>      
        <label>fecha:</label><br>
        <input type="date" name="fecha" required><br><br>
        <button type="submit">crear evento</button>
        <a href="index.php" class="boton"> Ver evento</a>
    </form> 

</div>

</body>
</html> 