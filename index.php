<?php include('include/header.php')?>

<section class="encabezado">
    <div class="contenido-header">
        <div class="contenedor-encabezado">
            <div class="texto-encabezado">
                <p>pagina de ventas</p>
                <h2>Ventas de Automoviles REB</h2>
                <p>Calidad y Garantia</p>
            </div>
            <div class="slider">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/5.png" class="d-block w-80" data-bs-interval="10000" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/3.png" class="d-block w-80" data-bs-interval="10000" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/1 (1).png" class="d-block w-80" data-bs-interval="10000" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="fondo">
        <img src="assets/img/fondo.jpg" alt="">
    </div>
</section>
<section class="contenedor-nosotros container" id="Nosotros">
    <div class="texto-nosotros">
        <p class="bienvenido">Bienvenido a!</p>
        <h1>Automoviles REB</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo possimus delectus id quos aut debitis
            officiis provident voluptatum dolorum? Accusantium quam non totam quis! Fugit cupiditate facere
            dolore!
            Nobis, at. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sequi facilis perferendis
            consectetur, quam consequuntur ex enim reprehenderit placeat, molestias obcaecati corporis rerum
            corrupti ullam expedita saepe consequatur illum assumenda.</p>

        <a href="<?= BASE_URL ?>pages/contacto.php">
            <button type="button" class="btn btn-outline-primary ">Contactanos</button>
        </a>
    </div>
    <div class="imagenes-nosotros">
        <div class="imagen1">
            <img src="assets/img/vertical.jpeg" alt="Auto">
        </div>
        <div class="imagen2">

            <img src="assets/img/Lamborghini4.webp" alt="auto">
            <img src="assets/img/descapotable4.webp" alt="auto">
        </div>
    </div>
</section>
<section class="galeria">

    <div class="container mt-4">
        <div class="text.galery ">
            <h1 class="text-primary">Galeria de imagenes</h1>
        </div>
        <div class="row" id="miniaturas">
            <!-- Las miniaturas de las imágenes se generarán aquí -->
        </div>

        <!-- Modal para mostrar la imagen en tamaño completo -->
        <div class="modal" id="modalImagen" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="" alt="Imagen en tamaño completo" class="img-fluid" id="imagenCompleta">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="separator">
    <div class="container">
        <h2>Texto de Ejemplo</h2>
        <p>Este es un pequeño texto de ejemplo para el separador.</p>
    </div>
</section>
<section class="videos">
    <div class="container">
        <div class="video-container">
            <video id="videoPlayer" controls>
                <source src="assets/videos/auto (3).mp4" type="video/mp4">
                <source src="assets/videos/auto (3).webn" type="video/mp4">
                <!-- Agrega más <source> si deseas admitir otros formatos de video -->
                Tu navegador no admite la reproducción de videos.
            </video>
        </div>
        <div class="video-controls">
            <button id="playBtn" class="btn btn-primary"><i class="fas fa-play"></i> </button>
            <button id="pauseBtn" class="btn btn-primary"><i class="fas fa-pause"></i> </button>
            <button id="stopBtn" class="btn btn-primary"><i class="fas fa-stop"></i> </button>
        </div>
    </div>
</section>

<section class=" gerente container " id="gerente">
    <div class="card mb-3 pt-5" style="max-width: 1400px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="assets/img/gerente1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">Gerente de la empresa</h2>
                    <h3 class="card-text">La exelencia está en la diversidad y el modo de progresar
                        es conocer y comparar las diversidades de productos.</h3>
                    <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Necessitatibus corporis dolores eveniet
                            vitae,
                            natus tempora recusandae hic laborum error ducimus repellat, laudantium temporibus tenetur
                            totam
                            sint
                            consequuntur eligendi! Asperiores, ad. Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Non eveniet quam temporibus et qui. Optio, quia. Id, iste porro ipsum, ullam natus,
                            soluta nihil velit quidem blanditiis ea ex quasi. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Cum corrupti quasi laudantium asperiores possimus dolor, in mollitia
                            beatae laborum quam perferendis enim expedita alias doloremque consequuntur minus debitis
                            culpa natus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, eos
                            exercitationem. Dolore, consequuntur voluptates nam voluptas adipisci doloribus excepturi
                            laboriosam et temporibus earum enim aperiam unde eius error, minus itaque. Lorem ipsum dolor
                            sit amet consectetur adipisicing elit. Praesentium dolores velit quod reiciendis nostrum
                            placeat voluptatibus architecto voluptatum at, exercitationem sed reprehenderit illum
                            accusantium ex id ipsam nulla tempora iure.</small></p>
                    <a href="<?=BASE_URL?>/pages/biografia.php" class="btn btn-primary">Ver Biografia</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/horarios.php'); ?>
<?php include('include/footer.php')?>