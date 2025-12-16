
<?php include './includes/header.php'; ?>
<link rel="stylesheet" href="css/estilo.css">

<main>
    <!-- Sección Hero -->
    <section class="hero">
        <h2>¡Hola, soy David!</h2>
        <p>Desarrollador web apasionado por crear soluciones digitales modernas y funcionales.</p>
        <a href="contacto.php" class="btn">Contáctame</a>
    </section>

    <!-- Sección Sobre mí -->
    <section class="sobre-mi">
        <h2>Sobre mí</h2>
        <p>
            Soy un programador especializado en PHP, HTML, CSS y JavaScript. 
            Me encanta transformar ideas en proyectos reales y ayudar a empresas y personas 
            a tener presencia digital profesional.
        </p>
    </section>

    <!-- Sección Proyectos -->
    <section class="proyectos">
        <h2>Mis proyectos</h2>
        <div class="galeria">
           <a href="/proyectos/proyecto1.php" target="_blank" class="card-link">
            <div class="card">
                <!--<img src="img/proyecto3.webp" alt="Proyecto 3" class="img-small">-->
                <h3>Proyecto 1</h3>
                <p>Validaciones JavaScript con un formulario de inicio de sesion y un backend en php</p>
                <p>click aqui</p>
            </div>
            </a>
            <div class="card">
                <!--<img src="img/proyecto2.webp" alt="Proyecto 2" class="img-small">-->
                <h3>Proyecto 2</h3>
                <p>Sitio corporativo responsivo con HTML5, CSS3 y JavaScript.</p>
                <p>proximamente</p>
            </div>
            <a href="https://github.com/Miniquique/porfolio" target="_blank" class="card-link">
            <div class="card">
                <!--<img src="img/proyecto3.webp" alt="Proyecto 3" class="img-small">-->
                <h3>Proyecto 3</h3>
                <p>Portfolio personal con integración de formulario de contacto, PHP, JavaScript y integracion con la api de telegram</p>
                <p>click aqui</p>
            </div>
            </a>
        </div>
    </section>

    <!-- Sección Habilidades -->
<section class="habilidades-slider">
    <h2>Mis Habilidades</h2>
    <script src="scipt/slider.js"></script>
    <div class="slider-container">
        <div class="slider">
            <div class="slide">PHP & MySQL</div>
            <div class="slide">HTML5 & CSS3</div>
            <div class="slide">JavaScript & jQuery</div>
            <div class="slide">Responsive Design</div>
            <div class="slide">Git & GitHub</div>
        </div>
    </div>
    <div class="slider-buttons">
        <button id="prev">&#10094;</button>
        <button id="next">&#10095;</button>
    </div>
</section>


    <!-- Sección Contacto rápido -->
    <section class="contacto-rapido">
        <h2>¿Quieres trabajar conmigo?</h2>
        <p>Puedes escribirme directamente desde la sección de <a href="contacto.php">Contacto</a>.</p>
    </section>
    
</main>

<?php include './includes/footer.php'; ?>

