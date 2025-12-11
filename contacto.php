<?php include 'includes/header.php'; ?>

<h2 style="text-align:center; margin-top:20px;">Contacto</h2>

<div class="form">
    <form method="POST" action="contacto.php">
        
        <!-- Nombre -->
        <div>
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
        </div>

        <!-- Teléfono -->
        <div>
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="+34 600 000 000" pattern="[0-9+ ]{9,15}">
        </div>

        <!-- Asunto -->
        <div>
            <label for="asunto">Asunto</label>
            <select id="asunto" name="asunto" required>
                <option value="">Selecciona una opción</option>
                <option value="consulta">Consulta general</option>
                <option value="ventas">Información de precios</option>
                <option value="soporte">otros</option>
            </select>
        </div>

        <!-- Mensaje -->
        <div>
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
        </div>

        <!-- Aceptar términos -->
        <div style="margin-bottom:15px;">
            <input type="checkbox" id="terminos" name="terminos" required>
            <label for="terminos">Acepto la política de privacidad</label>
        </div>

        <!-- Botón -->
        <button type="submit">Enviar mensaje</button>
    </form>
</div>

<?php
if ($_POST) {
    echo "<p style='text-align:center; margin-top:20px; color:green;'>Gracias, " . htmlspecialchars($_POST['nombre']) . ". Hemos recibido tu mensaje.</p>";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar datos
    $nombre   = htmlspecialchars($_POST['nombre']);
    $email    = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $asunto   = htmlspecialchars($_POST['asunto']);
    $mensaje  = htmlspecialchars($_POST['mensaje']);

    // Carpeta donde guardar los archivos (asegúrate de que exista y tenga permisos de escritura)
    $directorio = __DIR__ . "/mensajes";

    if (!is_dir($directorio)) {
        mkdir($directorio, 0777, true); // crea la carpeta si no existe
    }

    // Nombre del archivo con fecha y hora
    $fechaHora = date("Y-m-d_H-i-s");
    $archivo = $directorio . "/mensaje_" . $email .$fechaHora . ".txt";

    // Contenido del archivo
    $contenido  = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    $contenido .= "Enviado el: " . date("d/m/Y H:i:s") . "\n";

    // Guardar archivo
    file_put_contents($archivo, $contenido);

    echo "<p style='text-align:center; margin-top:20px; color:green;'>Gracias, $nombre. Tu mensaje se ha guardado correctamente.</p>";
}


?>

<?php include 'includes/footer.php'; ?>
