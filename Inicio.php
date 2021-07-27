<?php
session_start();
include_once 'php/login.php';
if (isset($_SESSION['usuario'])) {

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><?= $_SESSION["nombrecompleto"] ?></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="php/Cliente/CLIENTES.php">Cliente</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="php/Mascota/Mascota.php">Mascota</a>
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
                    <h1 class="mt-4">Bienvendio</h1>

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>