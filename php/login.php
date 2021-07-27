<?php
include 'conexion.php';

class login extends Conexion

{

    public function login($usuario, $pass)
    {

        $query = "SELECT * FROM personal  WHERE USUARIO ='" . $usuario . "'";
        $result = $this->con->query($query);
        // con mysql_num_rows verificamos que la cantidad de filas devuelve la consulta  
        if ($result->num_rows == 0) {
            // si es 0 filas, no hay usuario o password valido
            return 0;
        } else {
            if ($row = $result->fetch_assoc()) {
                if (password_verify($pass, $row['CLAVE'])) {
                    // se crean dos sesiones, una para mostrar el nombre de usuario del sistema y la otra para guardar en las tablas lo que realiza el usuario del sistema (integridad referencial)
                    session_start();
                    $_SESSION["usuario"] = $row["USUARIO"];
                    $_SESSION["id"] = $row["ID_PERSONAL"];
                    $_SESSION["nombrecompleto"] = $row["NOMBRE_COMPLETO"];
                    $_SESSION["ROL"] = $row["ID_ROL"];

                    // se devuelve 1 para indicar que se logueo exitosamente
                    return 1;
                } else {

                    return 2;
                }
            }
        }
    }
}
