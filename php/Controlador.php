<?php
//----------------------CLIENTES------------------------
include 'Cliente/MostrarDatos.php';

include 'Cliente/crud.php';

$MostrarDatosObj = new MostrarDatos();

$CrudObj = new crud();

// eliminar
if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
  $deleteId = $_GET['deleteId'];
  $CrudObj->deleteRecord($deleteId);
}

// iNSERTAR
if (isset($_POST['submit'])) {
  $CrudObj->insertData($_POST);
}


if (isset($_GET['editId']) && !empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $clientes = $MostrarDatosObj->displyaRecordById($editId);
}

// ACTUALIZAR
if (isset($_POST['update'])) {
  $CrudObj->updateRecord($_POST);
}

//---------------------------------------------------------

//-------------------------MASCOTAS-------------------------

include 'Mascota/MostrarDatos-mascotaa.php';

$MostrarMascotasObj = new MostrarMascota();

if (isset($_GET['editId-M']) && !empty($_GET['editId-M'])) {
  $editIdM = $_GET['editId-M'];
  $Mascotas = $MostrarMascotasObj->displyaRecordById($editIdM);
}

include 'Mascota/crud.php';
$Crud_MascotaObj = new crud_mascota();

if (isset($_POST['Insert-mascota'])) {
  $Crud_MascotaObj->insertData($_POST);
}

if (isset($_GET['deleteId-M']) && !empty($_GET['deleteId-M'])) {
  $deleteIdM = $_GET['deleteId-M'];
  $Crud_MascotaObj->deleteRecord($deleteIdM);
}

if (isset($_POST['update'])) {
  $Crud_MascotaObj->updateRecord($_POST);
}
