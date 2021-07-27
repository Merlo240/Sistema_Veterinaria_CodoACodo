<?php
include_once '../conexion.php';
class MostrarDatos extends Conexion
{


	public function ImprimirDatos()
	{
		$query = "SELECT * FROM clientes";
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
		$query = "SELECT * FROM clientes WHERE ID_CLIENTES= '$id'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		} else {
			echo "Record not found";
		}
	}
}
