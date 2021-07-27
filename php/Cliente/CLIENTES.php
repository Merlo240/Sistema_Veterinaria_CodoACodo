<?php

session_start();
include_once '../login.php';
if (isset($_SESSION['usuario'])) {
  include '../Controlador.php';
?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <title>Clientes</title>
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

      <div id="page-content-wrapper">

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
                  <a class="nav-link btn btn-info " href="../logout.php">Cerra Sesión</a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container-fluid">
          <div class="card text-center" style="padding:15px;">
            <h4>Clientes</h4>
          </div><br><br>

          <div class="container">
            <?php
            if (isset($_GET['msg1']) == "inserta") {
              echo "<div class='alert alert-success alert-dismissible fade show'role='alert'>
              Su Cliente se agregó con éxito 
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            if (isset($_GET['msg2']) == "actualizar") {
              echo "<div class='alert alert-success alert-dismissible fade show'role='alert'>
              Su Cliente se actualizó con éxito 
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            if (isset($_GET['msg3']) == "eliminar") {
              echo "<div class='alert alert-success alert-dismissible fade show'role='alert'>
             El Cliente fue eliminado con éxito 
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            if (isset($_GET['msg4']) == "eliminar") {
              echo "<div class='alert alert-danger alert-dismissible fade show'role='alert' >
             Uups Hubo un problema no se ha podido Elimniar el Cliente
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            if (isset($_GET['msg5']) == "actualizar") {
              echo "<div class='alert alert-danger alert-dismissible fade show'role='alert' >
              Uups Hubo un problema no se ha podido Actualizar el Cliente
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            if (isset($_GET['msg6']) == "inserta") {
              echo "<div class='alert alert-danger alert-dismissible fade show'role='alert' >
              Uups Hubo un problema no se ha podido Insertar el Cliente
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            ?>
            <h2>Lista de Registros
              <a href="INSERTAR-CLIENTE.php" class="btn btn-primary" style="float:right;">Nuevo Cliente</a>
            </h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>NOMBRE COMPLETO</th>
                  <th>DNI</th>
                  <th>DIRECCION</th>
                  <th>TELEFONO</th>
                  <th>EMAIL</th>
                  <th>SEXO</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $MostrarDatos = $MostrarDatosObj->ImprimirDatos();
                foreach ($MostrarDatos as $cliente) {
                ?>
                  <tr>
                    <td><?php echo $cliente['ID_CLIENTES'] ?></td>
                    <td><?php echo $cliente['NOMBRE_COMPLETO'] ?></td>
                    <td><?php echo $cliente['DNI'] ?></td>
                    <td><?php echo $cliente['DIRECCION'] ?></td>
                    <td><?php echo $cliente['TELEFONO'] ?></td>
                    <td><?php echo $cliente['EMAIL'] ?></td>
                    <td><?php echo $cliente['SEXO'] ?></td>
                    <td>
                      <a href="../Mascota/Insertar-Mascota.php?editId=<?php echo $cliente['ID_CLIENTES'] ?>" style="color:yellou">
                        <i class="fa fa-paw" aria-hidden="true"></i></a>&nbsp
                      <a href="MODIFICAR-CLIENTE.php?editId=<?php echo $cliente['ID_CLIENTES'] ?>" style="color:green">
                        <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                      <a href="CLIENTES.php?deleteId=<?php echo $cliente['ID_CLIENTES'] ?>" style="color:red" onclick="confirm('¿Está seguro de que desea eliminar este Cliente? ')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
        </script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
  </body>
  </body>

  </html>
<?php
} else {
  header("Location:../../index.php");
}
?>