<?php
include 'login.php';

$loginObj = new login();
if (isset($_POST['login'])) {
    $respuesta = $loginObj->login($_POST["usuario"], $_POST["clave"]);
    if ($respuesta == 1) {
        header("Location:Inicio.php");
    } elseif ($respuesta == 2) {
        header("Location:index.php?msg1=error");
    } else {
        header("Location:index.php?msg2=error");
    }
}
