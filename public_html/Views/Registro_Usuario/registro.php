<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="BryMunxz">
	<!-- Main CSS-->
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/sutec-logo2.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
	<!--===============================================================================================-->

	<title><?= $data['page_tag']; ?></title>
</head>

<?php
//// Verifica el parámetro "exito" en la URL
//$exito = isset($_GET['exito']) ? $_GET['exito'] : '';
//
//// Muestra una alerta basada en el valor del parámetro
//if ($exito === 'true') {
//    echo '<div class="alert alert-success">Cuenta verificada con éxito.</div>';
//} elseif ($exito === 'false') {
//    echo '<div class="alert alert-danger">Código de verificación inválido.</div>';
//}
?>

<body>
    <div id="divLoading"></div>
	<section class="material-half-bg">
		<div class="cover"></div>
	</section>
	<br><br><br>
	<!-- breadcrumb -->
	<div class="container">
		<div class="logo" style="text-align: center; margin: 0 auto; max-width: 250px;">
			<h1><a href="<?= base_url(); ?>"><img class="" src="<?= media(); ?>/images/Logo2.png" width="235" height="111" alt=""></a></h1>
		</div>
	</div>
	<br><br><br>
	<!-- Shoping Cart -->
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:3%">
            <form class="col-3" action="" id="form_verificar" name="form_verificar">
                <h2>Verificar Cuenta</h2>
                <div class="mb-3">
                    <label class="form-label" for="codigo">Código de Verificación</label>
                    <input type="number" class="form-control" id="codigo" name="codigo" maxlength="4" required>
                    <label class="form-label" for="email"></label>
                    <input type="text" name="email" id="email" value="<?= $_SESSION['userData']['email_user'];?>" required>
                    <label class="form-label" for="idUsuario"></label>
                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $_SESSION['userData']['idpersona']; ?>" required >
                </div>
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>
	<br>
	<br>
	<br><br><br>
</body>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
<?php
footerTienda($data);
?>