<?php
session_start();
include_once '../login.php';
if (isset($_SESSION['usuario'])) {
  include '../Controlador.php';
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Mascota</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../Cliente/CLIENTES.php">Cliente</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Mascota.php">Mascota</a>
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
            <h4>Modificar Mascota</h4>
          </div><br>

          <div class="container">
            <form action="Modificar-Mascota.php" method="POST">
              <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" name="uNombre" value="<?php echo $Mascotas['NOMBRE']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="date">Fecha de Nacimiento:</label>
                <input class="form-control" id="date" name="date" value="<?php echo $Mascotas['F_NACIMIENTO']; ?>" placeholder="MM/DD/YYYY" type="text" />
              </div>
              <div class="form-group">
                <label for="observacion">OBSERVACION:</label>
                <input type="text" class="form-control" name="uobservacion" value="<?php echo $Mascotas['OBSERVACION']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="tamano">Tamaño:</label>
                <select class="form-control" name="utamano">
                  <option value="<?php echo $Mascotas['TAMAÑO']; ?>"></option>
                  <option value="PEQUEÑO">Pequeño</option>
                  <option value="MEDIANO">Mediano</option>
                  <option value="GRANDE">Grande</option>
                  <option value="GIGANTE">Gigante</option>
                  <option value="SIN-ESPECIFICAR">Sin Especificar</option>
                </select>
              </div>
              <div class="form-group">
                <label for="caracteristicas">CARACTERISTICA</label>
                <input type="text" class="form-control" name="ucaracteristicas" value="<?php echo $Mascotas['CARACTERISTICA']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select class="form-control" name="usexo">
                  <option value="<?php echo $Mascotas['SEXO']; ?>"></option>
                  <option value="MACHO">Macho</option>
                  <option value="HEMBRA">Hembra</option>
                  <option value="SIN-ESPECIFICAR">Sin Especificar</option>
                </select>
              </div>
              <div class="form-group">
                <label for="raza">RAZA</label>
                <input id="raza" type="text" class="form-control" name="uraza" value="<?php echo $Mascotas['RAZA']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="t_mascota">Tipo de Mascota</label>
                <input id="t_mascota" type="text" class="form-control" name="ut_mascota" value="<?php echo $Mascotas['T_MASCOTA']; ?>" placeholder="" required="">
              </div>
              <div class="form-group">
                <label for="dueno">Dueño</label>
                <input type="text" class="form-control" name="udueno" readonly value="<?php echo $Mascotas['ID_CLIENTE']; ?>" placeholder="Enter email" required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $Mascotas['ID_MASCOTA']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script>
        <script src="../../js/funciones.js"></script>
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