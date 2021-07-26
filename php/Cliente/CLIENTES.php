<?php
include '../Controlador.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

  <div class="card text-center" style="padding:15px;">
    <h4>Clientes</h4>
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
    <h2>View Records
      <a href="INSERTAR-CLIENTE.php" class="btn btn-primary" style="float:right;">Add New Record</a>
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
        $MostrarDatos = $MostrarDatosObj->displayData();
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
              <a href="CLIENTES.php?deleteId=<?php echo $cliente['ID_CLIENTES'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
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