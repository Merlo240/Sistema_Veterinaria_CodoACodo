<?php

session_start();
include_once '../login.php';
if (isset($_SESSION['usuario'])) {
  include '../Controlador.php';
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="../../css/styles.css" rel="stylesheet" />
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar-->
      <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light"><?= $_SESSION["nombrecompleto"] ?></div>
        <div class="list-group list-group-flush">
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="CLIENTES.php">Cliente</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Mascota/Mascota.php">Mascota</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Citas</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Historial_Mascota</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Usuarios</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
        </div>
      </div>
      <!-- Page content wrapper-->
      <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle"><i class='fa fa-bars' aria-hidden='true'></i> Menu</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="#!"><?php switch ($_SESSION["ROL"]) {
                                                                            case '1':
                                                                              echo "<i class='fa fa-users-cog' aria-hidden='true'></i> Admin";
                                                                              break;
                                                                            case '2':
                                                                              echo "<i class='fa fa-user-tie' aria-hidden='true'></i> Secretariado";
                                                                              break;
                                                                            case '3':
                                                                              echo "<i class='fa fa-user-nurse' aria-hidden='true'></i> Veterinario";
                                                                              break;
                                                                            default:
                                                                              echo "<i class='fa fa-user-ninja' aria-hidden='true'></i> Invitado";
                                                                              break;
                                                                          }
                                                                          ?> </a></li>
                <li class="nav-item active red">
                  <a class="nav-link btn btn-info " href="php/logout.php">Cerra Sesión</a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">
          <div class="card text-center" style="padding:15px;">
            <h4>Modificar Cliente</h4>
          </div><br>

          <div class="container">
            <form action="MODIFICAR-CLIENTE.php" method="POST">
              <div class="form-group">
                <label for="Nombre_Completo">Nombre Completo:</label>
                <input type="text" class="form-control" name="unombre_completo" value="<?php echo $clientes['NOMBRE_COMPLETO']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="dni">D.N.I:</label>
                <input type="number" class="form-control" name="udni" value="<?php echo $clientes['DNI']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" name="udireccion" value="<?php echo $clientes['DIRECCION']; ?>" placeholder="Enter name" required="">
              </div>
              <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="tel" class="form-control" name="utelefono" value="<?php echo $clientes['TELEFONO']; ?>" placeholder="Enter name" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="uemail" value="<?php echo $clientes['EMAIL']; ?>" placeholder="Enter email" required="">
              </div>
              <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select class="form-control" name="usexo">
                  <option value="<?php echo $clientes['SEXO']; ?>"></option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  <option value="SIN-ESPECIFICAR">Sin Especificar</option>
                </select>
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $clientes['ID_CLIENTES']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
          </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../js/scripts.js"></script>
  </body>
  </body>

  </html>
<?php
} else {
  header("Location:index.php");
}
?>