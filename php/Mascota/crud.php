<?php
include_once '../conexion.php';


class crud_mascota extends Conexion
{
	// Insert customer data into customer table
	public function insertData($post)
	{
		$Nombre = $this->con->real_escape_string(strtoupper($_POST['Nombre']));
		$date = $this->con->real_escape_string($_POST['date']);
		$observacion = $this->con->real_escape_string(strtoupper($_POST['observacion']));
		$tamano = $this->con->real_escape_string(strtoupper($_POST['tamano']));
		$caracteristicas = $this->con->real_escape_string(strtoupper($_POST['caracteristicas']));
		$raza = $this->con->real_escape_string(strtoupper($_POST['raza']));
		$t_mascota = $this->con->real_escape_string(strtoupper($_POST['t_mascota']));
		$dueno = $this->con->real_escape_string($_POST['dueno']);
		$sexo = $this->con->real_escape_string($_POST['sexo']);
		$query = "INSERT INTO mascota (NOMBRE,SEXO,F_NACIMIENTO ,OBSERVACION,TAMAÑO,CARACTERISTICA,RAZA,T_MASCOTA,ID_CLIENTE ) VALUES('$Nombre','$sexo','$date','$observacion','$tamano','$caracteristicas','$raza','$t_mascota','$dueno')";
		$sql = $this->con->query($query);
		if ($sql == true) {
			header("Location:Mascota.php?msg1=insert");
		} else {
			echo "Registration failed try again!";
		}
	}

	// Update customer data into customer table
	public function updateRecord($postData)
	{
		$Nombre = $this->con->real_escape_string(strtoupper($_POST['uNombre']));
		$date = $this->con->real_escape_string($_POST['date']);
		$observacion = $this->con->real_escape_string(strtoupper($_POST['uobservacion']));
		$tamano = $this->con->real_escape_string(strtoupper($_POST['utamano']));
		$caracteristicas = $this->con->real_escape_string(strtoupper($_POST['ucaracteristicas']));
		$raza = $this->con->real_escape_string(strtoupper($_POST['uraza']));
		$t_mascota = $this->con->real_escape_string(strtoupper($_POST['ut_mascota']));
		$dueno = $this->con->real_escape_string($_POST['udueno']);
		$sexo = $this->con->real_escape_string($_POST['usexo']);
		$id = $this->con->real_escape_string($_POST['id']);

		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE mascota SET NOMBRE = '$Nombre',SEXO = '$sexo',F_NACIMIENTO = '$date', OBSERVACION = '$observacion', TAMAÑO = '$tamano',CARACTERISTICA = '$caracteristicas',RAZA = '$raza',T_MASCOTA = '$t_mascota', ID_CLIENTE = '$dueno' WHERE ID_MASCOTA = '$id'";
			$sql = $this->con->query($query);
			if ($sql == true) {
				header("Location:Mascota.php?msg2=update");
			} else {
				echo "Registration updated failed try again!";
			}
		}
	}

	// Delete customer data from customer table
	public function deleteRecord($id)
	{
		$query = "DELETE FROM mascota WHERE ID_MASCOTA = '$id'";
		$sql = $this->con->query($query);
		if ($sql == true) {
			header("Location:Mascota.php?msg3=delete");
		} else {
			echo "Record does not delete try again";
		}
	}
}
