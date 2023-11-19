<?php
// Iniciar o reanudar la sesión
session_start();

// Verificar si la variable de sesión existe
if (!isset($_SESSION['visits'])) {
    // Si no existe, inicializarla a 1
    $_SESSION['visits'] = 1;
} else {
    // Si existe, incrementarla en 1 en cada visita
    $_SESSION['visits']++;
}

// Mostrar el número de visitas
echo "Número de visitas: " . $_SESSION['visits'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a mi sitio web</h1>
    <p>hola soy Allan vera estudiante de la carrera de ingeniera en sistemas inteligente.</p>
</body>
</html>

