<?php
include '../Controlador.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Mascota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

  <div class="card text-center" style="padding:15px;">
    <h4>Mascotas</h4>
  </div><br><br>

  <div class="container">
    <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration added successfully
            </div>";
    }
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Record deleted successfully
            </div>";
    }
    ?>
    <h2>Lista de Registros
      <a href="Insertar-Mascota.php" class="btn btn-primary" style="float:right;">Add New Record</a>
    </h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>NOMBRE</th>
          <th>SEXO</th>
          <th>FECHA DE NACIMIENTO</th>
          <th>OBSERVACION</th>
          <th>TAMAÑO</th>
          <th>CARACTERISTICA</th>
          <th>RAZA</th>
          <th>TIPO DE MASCOTA</th>
          <th>DUEÑO</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $MostrarMascotas = $MostrarMascotasObj->displayData();
        foreach ($MostrarMascotas as $Mascota) {
        ?>
          <tr>
            <td><?php echo $Mascota['NOMBRE'] ?></td>
            <td><?php echo $Mascota['SEXO'] ?></td>
            <td><?php echo $Mascota['F_NACIMIENTO'] ?></td>
            <td><?php echo $Mascota['OBSERVACION'] ?></td>
            <td><?php echo $Mascota['TAMAÑO'] ?></td>
            <td><?php echo $Mascota['CARACTERISTICA'] ?></td>
            <td><?php echo $Mascota['RAZA'] ?></td>
            <td><?php echo $Mascota['T_MASCOTA'] ?></td>
            <td><?php echo $Mascota['NOMBRE_COMPLETO'] ?></td>
            <td>
              <a href="Modificar-Mascota.php?editId-M=<?php echo $Mascota['ID_MASCOTA'] ?>" style="color:green">
                <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
              <a href="Mascota.php?deleteId-M=<?php echo $Mascota['ID_MASCOTA'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>