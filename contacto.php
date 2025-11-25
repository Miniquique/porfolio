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

<?php include 'includes/footer.php'; ?>
