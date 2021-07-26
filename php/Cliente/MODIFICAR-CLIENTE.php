<?php
include '../Controlador.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cliente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>