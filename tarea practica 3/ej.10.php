<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Promedios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2>Cálculo de Promedios</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="nota1">Nota 1:</label>
    <input type="number" id="nota1" name="nota1" min="0" max="10" required>

    <label for="nota2">Nota 2:</label>
    <input type="number" id="nota2" name="nota2" min="0" max="10" required>

    <label for="nota3">Nota 3:</label>
    <input type="number" id="nota3" name="nota3" min="0" max="10" required>

    <button type="submit">Calcular Promedio</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $nota1 = (float)$_POST["nota1"];
    $nota2 = (float)$_POST["nota2"];
    $nota3 = (float)$_POST["nota3"];

    // Validar que las notas estén en el rango de 0 a 10
    if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10 || $nota3 < 0 || $nota3 > 10) {
        echo "<p style='color: red;'>Las notas deben estar en el rango de 0 a 10.</p>";
    } else {
        // Almacenar datos en un arreglo asociativo
        $alumno = [
            'apellido' => $apellido,
            'nombre' => $nombre,
            'nota1' => $nota1,
            'nota2' => $nota2,
            'nota3' => $nota3,
        ];

        // Calcular el promedio
        $promedio = ($nota1 + $nota2 + $nota3) / 3;

        // Mostrar resultados
        echo "<div class='result'>";
        echo "<h3>Resultados para $apellido, $nombre:</h3>";
        echo "<p>Nota 1: $nota1</p>";
        echo "<p>Nota 2: $nota2</p>";
        echo "<p>Nota 3: $nota3</p>";
        echo "<p>Promedio: $promedio</p>";
        echo "</div>";
    }
}
?>

</body>
</html>
