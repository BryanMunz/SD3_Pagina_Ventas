<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Victor, Eden Andres">
    <meta name="theme-color" content="#00A6D4">
    <link rel="shortcut icon" href="<?= media();?>/images/sutec-logo2.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <?php
    $showRegisterForm = isset($_GET['register']) && $_GET['register'] === 'true';
    $showLoginForm = isset($_GET['login']) && $_GET['login'] === 'true';
    $loginBoxClass = 'login-box';

    if ($showRegisterForm) {
    $loginBoxClass .= ' registration-open';
        
    } elseif ($showLoginForm) {
    $loginBoxClass = 'login-box';
        
    }
    ?>
      <section class="login-content" style="display: flex; flex-direction: column;">
        <div class="logo" style="text-align: center;">
          <h1><a href="<?= base_url(); ?>"><img class="" src="<?= media();?>/images/Logo2.png" width="235" height="111" alt=""></a></h1>
        </div>
        <div class="<?= $loginBoxClass ?>">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        <form class="login-form" name="formLogin" id="formLogin" action="" style="<?= $showRegisterForm ? 'display: none;' : ''; ?>">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>
          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">¿Olvidaste tu contraseña?</a></p>
            </div>
            <p>¿No tienes una cuenta? <a href="#1" id="toggleRegistro" data-toggle="flip1" style="color:#4267B2; font-size:14px; font-weight:bold;">Regístrate</a></p>
          </div>
          <div id="alertLogin" class="text-center"></div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
          </div>
        </form>
        <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>¿Olvidaste contraseña?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
          </div>
        </form>
        <!-- Formulario de registro de usuario -->
        <form id="formRegister" name="formRegister" class="login-form" action="" style="<?= $showRegisterForm ? '' : 'display: none;'; ?>">
          <h3 class="register-head" style="text-align: center;"><i class="fa fa-lg fa-fw fa-user-plus"></i> REGISTRAR USUARIO</h3>
          <div class="form-group">
            <label class="control-label" for="txtNombre">NOMBRE</label>
            <input id="txtNombre" name="txtNombre" class="form-control" type="text" placeholder="Nombre" required="">
          </div>
          <div class="form-group">
            <label class="control-label" for="txtApellido">APELLIDO</label>
            <input id="txtApellido" name="txtApellido" class="form-control" type="text" placeholder="Apellidos" required="">
          </div>
          <div class="form-group">
            <label class="control-label" for="txtEmailRegistro">EMAIL</label>
            <input id="txtEmailRegistro" name="txtEmailRegistro" class="form-control" type="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <label class="control-label" for="txtTelefono">TELÉFONO</label>
            <input id="txtTelefono" name="txtTelefono" class="form-control" type="text" placeholder="Telefono" required="" onkeypress="return controlTag(event);">
          </div>
          <div class="form-group">
            <label class="control-label" for="txtPasswordRegistro">CONTRASEÑA</label>
            <input id="txtPasswordRegistro" name="txtPasswordRegistro" class="form-control mb-1" type="password" placeholder="Contraseña" required="">
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user-plus fa-lg fa-fw"></i> Registrate</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="<?= base_url() ?>/login" class="flex-c-m trans-04 p-lr-25">Iniciar Sesión</a></p>
          </div>
        </form>
      </div> 
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
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
  </body>
</html>