<?php include('header.php'); ?>
<main>
    <link rel="stylesheet" href="../css/estilo.css">
    <!-- Título del proyecto -->
    <section class="hero">
        <h2>Validación avanzada de formularios con JavaScript</h2>
    </section>

    <!-- Bloque de texto centrado -->
    <section class="sobre-mi">
        <div class="sobre-mi-contenido">
            <div class="texto" style="text-align:center; margin:auto;">
                <p>
                    En este proyecto desarrollé un formulario web completo que integra validaciones dinámicas y gestión de datos en cliente. 
                    El objetivo fue garantizar la calidad de la información introducida por el usuario y mejorar la experiencia de uso.
                </p>
                <h3>Funcionalidades implementadas</h3>
                <ul style="text-align:left; display:inline-block;">
                    <li>Eventos DOM: conversión automática de nombre y apellidos a mayúsculas al perder el foco.</li>
                    <li>Expresiones regulares: validación de DNI, fecha de nacimiento, teléfono móvil y correo electrónico.</li>
                    <li>Validación lógica: cálculo de la edad para asegurar que sea mayor de 18 años.</li>
                    <li>Gestión de errores: mensajes dinámicos en rojo con foco automático en el campo incorrecto.</li>
                    <li>Confirmación de envío con <code>confirm()</code>.</li>
                    <li>Cookies: almacenamiento de intentos de envío y fecha/hora de alta.</li>
                    <li>Interacción con el DOM: actualización en tiempo real de errores e intentos.</li>
                </ul>

                <h3>Valor añadido</h3>
                <ul style="text-align:left; display:inline-block;">
                    <li>Aplicar JavaScript moderno en la validación de formularios.</li>
                    <li>Diseñar experiencias de usuario más seguras y profesionales.</li>
                    <li>Integrar lógica de negocio directamente en el cliente.</li>
                    <li>Documentar y estructurar el código de forma clara y reutilizable.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Botones -->
    <section style="text-align:center; margin:40px auto;">
        <a href="../../Alta-de-usuario" class="btn">Ver Ejemplo</a>
        <a href="https://github.com/Miniquique/Alta-de-usuario.git" target="_blank" class="btn">Ver en GitHub</a>
    </section>
</main>
<?php include('foother.php'); ?>
