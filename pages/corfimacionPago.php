<?php include('../include/header.php') ?>
<!-- Modal de Confirmación de Pago -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">Confirmar Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro que deseas realizar el pago?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="realizarPago()">Confirmar Pago</button>
      </div>
    </div>
  </div>
</div>
<script>
function realizarPago() {
  // Aquí puedes realizar las acciones necesarias para procesar el pago, por ejemplo, enviar datos a un servidor.
  // En este ejemplo, solo mostraremos un mensaje de confirmación.
  alert('Pago realizado con éxito.');
}
</script>
<?php include('../include/footer.php') ?>