<?php
include_once '../conexion.php';
class MostrarMascota extends Conexion
{


	public function ImprimirDatos()
	{
		$query = "SELECT mascota.ID_MASCOTA,mascota.NOMBRE, mascota.SEXO, mascota.F_NACIMIENTO, mascota.OBSERVACION, mascota.TAMAÑO, mascota.CARACTERISTICA, mascota.RAZA, mascota.T_MASCOTA, clientes.NOMBRE_COMPLETO FROM mascota INNER JOIN clientes on mascota.ID_CLIENTE =clientes.ID_CLIENTES ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		} else {
			echo "No found records";
		}
	}


	public function ImprimirDatosId($id)
	{
		$query = "SELECT * FROM mascota WHERE ID_MASCOTA= '$id'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		} else {
			echo "Record not found";
		}
	}
}
