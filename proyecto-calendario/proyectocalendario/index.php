<?php
include 'conexion.php';

// Ejecuta la consulta para obtener todos los registros de la tabla "evento"
$stmt = $pdo->query("SELECT * FROM evento");
$eventos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Asegúrate de que la variable sea $eventos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="centrado">Eventos</h1>
    <a href="crud.php" class="boton"> Agregar evento</a>
    <table borde="1"> <!-- Corregido el atributo "borde" a "border" -->
        <thead class="centrado">
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
        <!-- Usar la variable $evento correctamente en el foreach -->
        <?php foreach ($eventos as $evento): ?>
            <tr class="centrado">
                <td><?php echo htmlspecialchars($evento['nombre']); ?></td> <!-- Campo "nombre" de la tabla -->
                <td><?php echo htmlspecialchars($evento['fecha']); ?></td> <!-- Campo "fecha" de la tabla -->
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>



