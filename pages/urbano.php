<?php include('../include/header.php');?>
<?php include('../include/bienvenida.php'); ?> 
    <section class="menu container" id="productos">
       <h2 class="texto-autos">Automoviles Urbuanos</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col border border-5" data-urbano="urbano">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../assets/img/urbano1.jpg" alt="auto">
                <h2>Lorem, ipsum.</h2>
                <p>Lorem ipsum dolor sit.</p>
                <div class="precio">
                    <p>40bs</p>
                    <button onclick="location.href='<?=BASE_URL?>/pages/pago.php'">
                        <i class="fa-solid fa-cart-shopping" style="color: #fcfcfc;"></i>
                    </button>
                </div>
            </div>
            <div class="col border border-5" data-urbano="urbano">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../assets/img/urbano2.jpg" alt="auto">
                <h2>Lorem, ipsum.</h2>
                <p>Lorem ipsum dolor sit.</p>
                <div class="precio">
                    <p>40bs</p>
                    <button onclick="location.href='<?=BASE_URL?>/pages/pago.php'">
                        <i class="fa-solid fa-cart-shopping" style="color: #fcfcfc;"></i>
                    </button>
                </div>
            </div>
            <div class="col border border-5" data-urbano="urbano">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../assets/img/urbano3.jpg" alt="auto">
                <h2>Lorem, ipsum.</h2>
                <p>Lorem ipsum dolor sit.</p>
                <div class="precio">
                    <p>40bs</p>
                    <button onclick="location.href='<?=BASE_URL?>/pages/pago.php'">
                        <i class="fa-solid fa-cart-shopping" style="color: #fcfcfc;"></i>
                    </button>
                </div>
            </div>          
        </div>
  </section>
<?php include('../include/horarios.php'); ?>
<?php include('../include/footer.php');?> 
 