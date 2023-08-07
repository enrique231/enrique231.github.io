<!-- Sección de Bienvenida -->
<section class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <!-- Imagen de Automóvil -->
      <img src="../assets/img/bienvenida.png" class="img-fluid" alt="Automóvil">
    </div>
    <div class="col-md-6">
      <!-- Título y Mensaje de Bienvenida -->
      <h1>Bienvenido al Mundo de los Automóviles</h1>
      <p>
        Explora nuestra increíble colección de automóviles de lujo, deportivos y clásicos. 
        ¡Descubre lo último en tecnología automotriz y vive la experiencia de conducción de tus sueños!
      </p>
      <p>
        En nuestra concesionaria, encontrarás una amplia selección de marcas y modelos, desde los clásicos
        y elegantes hasta los más modernos y potentes. Nuestro equipo de expertos en automóviles está listo
        para brindarte el mejor servicio y asesoramiento para que encuentres el automóvil perfecto que se adapte
        a tus necesidades y preferencias.
      </p>
      <!-- Botón para Ver Visión y Misión -->
      <button class="btn btn-primary" onclick="toggleVisionMision()">Ver Visión y Misión</button>
    </div>
  </div>
</section>

<!-- Sección oculta de Visión y Misión -->
<section class="container mt-5" id="visionMisionSection" style="display: none;">
  <div class="row">
    <div class="col-md-12">
      <!-- Título de Visión y Misión -->
      <h2>Visión y Misión</h2>
      <!-- Contenido de Visión -->
      <h3>Visión:</h3>
      <p>Nuestra visión es ser líderes en el mercado automotriz, ofreciendo la más alta calidad y tecnología en nuestros productos y servicios.</p>
      <!-- Contenido de Misión -->
      <h3>Misión:</h3>
      <p>Nuestra misión es brindar a nuestros clientes una experiencia inigualable al adquirir sus vehículos, ofreciendo variedad, excelencia y satisfacción en cada aspecto.</p>
    </div>
  </div>
</section>

<!-- Script para mostrar/ocultar Visión y Misión -->
<script>
let visionMisionVisible = false;

function toggleVisionMision() {
  const visionMisionSection = document.getElementById("visionMisionSection");
  
  if (visionMisionVisible) {
    visionMisionSection.style.display = "none";
    visionMisionVisible = false;
  } else {
    visionMisionSection.style.display = "block";
    visionMisionVisible = true;
  }
}
</script>