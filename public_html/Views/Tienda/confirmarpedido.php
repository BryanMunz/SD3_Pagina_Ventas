<?php
headerTienda($data);
?>
<br><br><br>
<div class="jumbotron text-center">
  <h1 class="display-4">¡Gracias por tu compra!</h1>
  <p class="lead">Tu pedido fue procesado con éxito.</p>
  <p>No. Orden: <strong> <?= $data['orden']; ?> </strong></p>
  <?php
  if (!empty($data['transaccion'])) {
  ?>
    <p>Transacción: <strong> <?= $data['transaccion']; ?> </strong></p>
  <?php } ?>
  <hr class="my-4">
  <p>Muy pronto estaremos en contacto para coordinar la entrega.</p>
  <p>Puedes ver el estado de tu pedido en la sección pedidos de tu usuario.</p>
  <br>
  <a class="btn btn-primary btn-lg" href="<?= base_url(); ?>" role="button">Continuar</a>
</div>
<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';

echo $status . '<br>';
?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Función que se ejecutará cuando se cargue la página
    function ejecutarCodigo() {
      let dir = document.querySelector("#txtDireccion").value;
      let ciudad = document.querySelector("#txtCiudad").value;
      let inttipopago = document.querySelector("#listtipopago").value;

      if (dir == "" || ciudad == "" || inttipopago == "") {
        swal("", "Complete datos de envío", "error");
        return;
      } else {
        divLoading.style.display = "flex";
        let request = (window.XMLHttpRequest) ?
          new XMLHttpRequest() :
          new ActiveXObject('Microsoft.XMLHTTP');
        let ajaxUrl = base_url + '/Tienda/procesarVenta';
        let formData = new FormData();
        formData.append('direccion', dir);
        formData.append('ciudad', ciudad);
        formData.append('inttipopago', inttipopago);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function() {
          if (request.readyState != 4) return;
          if (request.status == 200) {
            let objData = JSON.parse(request.responseText);
            if (objData.status) {
              window.location = base_url + "/tienda/confirmarpedido/";
            } else {
              swal("", objData.msg, "error");
            }
          }
          divLoading.style.display = "none";
          return false;
        }
      }
    }

    // Llamar a la función directamente al cargar la página
    ejecutarCodigo();
  });
</script>

<?php
footerTienda($data);
?>