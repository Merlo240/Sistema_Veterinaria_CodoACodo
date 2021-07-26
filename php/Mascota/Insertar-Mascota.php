<?php

// Include database file
include '../Controlador.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Mascota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

  <div class="card text-center" style="padding:15px;">
    <h4>Nueva Mascota</h4>
  </div><br>

  <div class="container">
    <form action="Insertar-Mascota.php" method="POST">
      <div class="form-group">
        <label for="Nombre">Nombre:</label>
        <input type="text" class="form-control" name="Nombre" placeholder="" required="">
      </div>
      <div class="form-group">
        <label for="date">Fecha de Nacimiento:</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
      </div>
      <div class="form-group">
        <label for="observacion">OBSERVACION:</label>
        <input type="text" class="form-control" name="observacion" placeholder="" required="">
      </div>
      <div class="form-group">
        <label for="tamano">Tamaño:</label>
        <select class="form-control" name="tamano">
          <option value="">---</option>
          <option value="PEQUEÑO">Pequeño</option>
          <option value="MEDIANO">Mediano</option>
          <option value="GRANDE">Grande</option>
          <option value="GIGANTE">Gigante</option>
          <option value="SIN-ESPECIFICAR">Sin Especificar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="caracteristicas">CARACTERISTICA</label>
        <input type="text" class="form-control" name="caracteristicas" placeholder="" required="">
      </div>
      <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select class="form-control" name="sexo">
          <option value="">---</option>
          <option value="MACHO">Macho</option>
          <option value="HEMBRA">Hembra</option>
          <option value="SIN-ESPECIFICAR">Sin Especificar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="raza">RAZA</label>
        <input id="raza" type="text" class="form-control" name="raza" placeholder="" required="">
      </div>
      <div class="form-group">
        <label for="t_mascota">Tipo de Mascota</label>
        <input id="t_mascota" type="text" class="form-control" name="t_mascota" placeholder="" required="">
      </div>
      <div class="form-group">
        <label for="dueno">Dueño</label>
        <input type="text" class="form-control" value="<?php echo $clientes['ID_CLIENTES'] ?>" name=" dueno" placeholder="" required="">
      </div>
      <input type="submit" name="Insert-mascota" class="btn btn-primary" style="float:right;" value="Submit">
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script>
  <script src="../../js/funciones.js"></script>
</body>

</html>