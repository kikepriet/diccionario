<?php
// ======= Configuración inicial =======
$file = "diccionario.json"; // Archivo donde se guardarán los datos

// Crear archivo vacío si no existe
if (!file_exists($file)) {
    file_put_contents($file, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// ======= Obtener último elemento =======
$contenido = file_get_contents($file);
$diccionario = json_decode($contenido, true);
$ultimaPalabra = !empty($diccionario) ? end($diccionario) : null;

// ======= Procesar formulario =======
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $palabra = trim($_POST["palabra"]);
    $abreviatura = trim($_POST["abreviatura"]);
    $descripcion = trim($_POST["descripcion"]);

    if (!empty($palabra) && !empty($abreviatura) && !empty($descripcion)) {
        // Leer archivo existente
        $contenido = file_get_contents($file);
        $data = json_decode($contenido, true);

        if (!is_array($data)) {
            $data = [];
        }

        // Agregar nuevo registro
        $nuevo = [
            "palabra" => $palabra,
            "abreviatura" => $abreviatura,
            "descripcion" => $descripcion
        ];
        $data[] = $nuevo;

        // Guardar JSON actualizado
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        
        // Actualizar la última palabra después de guardar
        $ultimaPalabra = $nuevo;

        $mensaje = "✅ Registro guardado correctamente.";
    } else {
        $mensaje = "⚠️ Todos los campos son obligatorios.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario Técnico | Registro</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; background-color: #f4f6f8; color: #2b2b2b;">

    <div style="max-width: 600px; margin: 40px auto; background-color: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border: 1px solid #d3d3d3;">
        <h2 style="text-align: center; color: #1c2e4a; margin-bottom: 25px;">Registro de términos del diccionario</h2>

        <?php if ($ultimaPalabra): ?>
            <div style="background-color: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #e9ecef;">
                <h3 style="color: #1c2e4a; margin-top: 0; margin-bottom: 10px; font-size: 16px;">Última palabra agregada:</h3>
                <p style="margin: 5px 0;"><strong>Palabra:</strong> <?php echo htmlspecialchars($ultimaPalabra['palabra']); ?></p>
                <p style="margin: 5px 0;"><strong>Abreviatura:</strong> <?php echo htmlspecialchars($ultimaPalabra['abreviatura']); ?></p>
                <p style="margin: 5px 0;"><strong>Descripción:</strong> <?php echo htmlspecialchars($ultimaPalabra['descripcion']); ?></p>
            </div>
        <?php endif; ?>

        <?php if (isset($mensaje)): ?>
            <p style="text-align:center; font-weight: bold; color: <?php echo (strpos($mensaje, '✅') !== false) ? '#2e7d32' : '#c62828'; ?>;">
                <?php echo $mensaje; ?>
            </p>
        <?php endif; ?>

        <form method="POST" action="" style="display: flex; flex-direction: column; gap: 15px;">
            
            <label for="palabra" style="font-weight: bold; color: #1c2e4a;">Palabra:</label>
            <input type="text" id="palabra" name="palabra" required
                style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px;">

            <label for="abreviatura" style="font-weight: bold; color: #1c2e4a;">Abreviatura:</label>
            <input type="text" id="abreviatura" name="abreviatura" required
                style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px;">

            <label for="descripcion" style="font-weight: bold; color: #1c2e4a;">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="5" required
                style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px; resize: vertical;"></textarea>

            <button type="submit"
                style="background-color: #1c2e4a; color: white; padding: 12px; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
                Enviar
            </button>
        </form>
    </div>

    <footer style="text-align:center; padding: 15px; font-size: 13px; color: #777;">
        © <?php echo date("Y"); ?> Diccionario Técnico — Todos los derechos reservados.
    </footer>

    <!-- Responsividad -->
    <style>
        @media (max-width: 600px) {
            div[style*="max-width: 600px"] {
                margin: 20px;
                padding: 20px;
            }
            h2 {
                font-size: 18px;
            }
        }
    </style>

    <script>
        // Poner foco en el campo de palabra al cargar la página
        window.onload = function() {
            document.getElementById('palabra').focus();
        }
    </script>
</body>
</html>
