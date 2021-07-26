<?php

  // Include database file
  include '../Controlador.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Cliente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>Nuevo Cliente</h4>
</div><br> 

<div class="container">
  <form action="INSERTAR-CLIENTE.php" method="POST">
    <div class="form-group">
      <label for="Nombre_Completo">Nombre Completo:</label>
      <input type="text" class="form-control" name="Nombre_Completo" placeholder="" required="">
    </div>
    <div class="form-group">
      <label for="dni">D.N.I:</label>
      <input type="number" class="form-control" name="dni" placeholder="" required="">
    </div>
    <div class="form-group">
      <label for="direccion">Direccion:</label>
      <input type="text" class="form-control" name="direccion" placeholder="Enter name" required="">
    </div>
    <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="tel" class="form-control" name="telefono" placeholder="Enter name" required="">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
    </div>
    <div class="form-group">
      <label for="sexo">Sexo:</label>
      <select class="form-control" name="sexo">
        <option value="">---</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="SIN-ESPECIFICAR">Sin Especificar</option>
      </select>  
    </div>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>