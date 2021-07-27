<?php
include 'php/puente.php';

session_start();
if (!isset($_SESSION['id']) && !isset($_SESSION['usuario'])) {
?>
  <!doctype html>
  <html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Iniciar Sesión</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <main class="form-signin">
      <img class="mb-4" src="assets/imagen/inicio.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Iniciar Sesión </h1>
      <?php
      if (isset($_GET['msg2']) == "error") {
        echo "<div class=' alert alert-danger alert-dismissible'>
           <button type='button' class='close' data-dismiss='alert'aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
              Usuario y/o Contraseña incorrectos
            </div>";
      }
      if (isset($_GET['msg1']) == "error") {
        echo "<div class=' alert alert-danger alert-dismissible'>
              Contraseña no valida
            </div>";
      }
      ?>
      <form action="index.php" method="POST" autocomplete="off">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="name@example.com">
          <label for="floatingInput">Usuario</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="clave" placeholder="Password">
          <label for="floatingPassword">Contraseña</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Ingresar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
      </form>
    </main>

  </body>

  </html>

<?php } else {
  header("Location:Inicio.php");
} ?>