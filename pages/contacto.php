<?php include('../include/header.php')?>
<section class="formulario-contacto container" id="contacto">
    <div class="informacion-contacto">
        <h3>Contactanos</h3>
        <p><i class="fa-solid fa-location-dot" style="color: #f31637;"></i>Barrio Urquipiña</p>
        <p><i class="fa-regular fa-envelope" style="color: #ff2f0a;"></i> enriuquerojas1234@gmail.com</p>
        <p><i class="fa-solid fa-phone" style="color: #1667f3;"></i></i>+59173601790</p>
        <div class="redes-sociales">
            <i class="fa-brands fa-facebook face"></i>
            <i class="fa-brands fa-square-twitter twitter" style="color: #2270f7;"></i>
            <i class="fa-brands fa-instagram instagran" style="color: #c61ce9;"></i>
        </div>
    </div>

    <!--<form class="formulario" action="https://formsubmit.co/enriuquerojas1234@gmail.com " method="POST" id="contactForm">
        <div class="mb-3">
            <label for="exampleFormControlInput1" name="Nombre">Nombre</label>
            <input type="text" class="form-control form-control-lg" name="Nombre" placeholder="Enrique" id="nombre"
                aria-label=".form-control-lg example">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" name="Apellido">Apellido</label>
            <input type="text" class="form-control form-control-lg" name="Apellido" placeholder="Rojas" id="apellidos"
                aria-label=".form-control-lg example">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="telefono">Teléfono</label>
            <input type="text" class="form-control form-control-lg" name="telefono" placeholder="+59173601790"
                id="telefono" aria-label=".form-control-lg example">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" name="email" class="form-label">Correo </label>
            <input class="form-control form-control-lg" name="email" type="text"
                placeholder="enriuquerojas1234@gmail.com" aria-label=".form-control-lg example">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" name="telefono" class="form-label">mensaje</label>
            <textarea type="text" class="form-control" name="mensaje" id="exampleFormControlTextarea1"
                rows="6"></textarea>
        </div>
        <div class="btn-formulario">
            <input type="submit" class="btn btn-outline-primary" value="Enviar">

        </div>

    </form>-->
    <div class="container mt-2" >
    
    <form id="contactForm" class="formulario" action="https://formsubmit.co/enriuquerojas1234@gmail.com " method="POST" id="contactForm">
      <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" placeholder="Enrique" class="form-control" id="name" required>
      </div>
      <div class="form-group">
        <label for="name">Apellido</label>
        <input type="text" placeholder="Rojas" class="form-control" id="name" required>
      </div>
      <div class="form-group">
        <label for="name">Numero de telefono</label>
        <input type="text" placeholder="73601790" class="form-control" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" placeholder="enriuquerojas1234@gmail.com" class="form-control" id="email" required>
      </div>
      <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea class="form-control" placeholder="Introdusca su mensaje" id="message" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <div id="successMessage" class="mt-3 d-none">
      <div class="alert alert-success" role="alert">
        Message sent successfully!
      </div>
    </div>
  </div>

</section>

<
<?php include('../include/footer.php')?>