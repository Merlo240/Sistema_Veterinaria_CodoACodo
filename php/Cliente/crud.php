<?php
include_once '../conexion.php';


class crud extends Conexion
{
	// Insert customer data into customer table
	public function Insertar($post)
	{
		$nombre_c = $this->con->real_escape_string(strtoupper($_POST['Nombre_Completo']));
		$dni = $this->con->real_escape_string($_POST['dni']);
		$direccion = $this->con->real_escape_string(strtoupper($_POST['direccion']));
		$telefono = $this->con->real_escape_string($_POST['telefono']);
		$email = $this->con->real_escape_string($_POST['email']);
		$sexo = $this->con->real_escape_string($_POST['sexo']);
		$query = "INSERT INTO clientes (DNI,NOMBRE_COMPLETO,DIRECCION ,TELEFONO,EMAIL,SEXO ) VALUES('$dni','$nombre_c','$direccion','$telefono','$email','$sexo')";
		$sql = $this->con->query($query);
		if ($sql == true) {
			header("Location:CLIENTES.php?msg1=inserta");
		} else {
			header("Location:CLIENTES.php?msg6=inserta");;
		}
	}

	// Update customer data into customer table
	public function Actualizar($postData)
	{
		$nombre_c = $this->con->real_escape_string($_POST['unombre_completo']);
		$dni = $this->con->real_escape_string($_POST['udni']);
		$direccion = $this->con->real_escape_string($_POST['udireccion']);
		$telefono = $this->con->real_escape_string($_POST['utelefono']);
		$email = $this->con->real_escape_string($_POST['uemail']);
		$sexo = $this->con->real_escape_string($_POST['usexo']);
		$id = $this->con->real_escape_string($_POST['id']);

		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE clientes SET DNI = '$dni',NOMBRE_COMPLETO = '$nombre_c',DIRECCION = '$direccion', TELEFONO = '$telefono', EMAIL = '$email',SEXO = '$sexo' WHERE ID_CLIENTES = '$id'";
			$sql = $this->con->query($query);
			if ($sql == true) {
				header("Location:CLIENTES.php?msg2=actualizar");
			} else {
				header("Location:CLIENTES.php?msg5=actualizar");
			}
		}
	}

	// Delete customer data from customer table
	public function Eliminar($id)
	{
		$query = "DELETE FROM clientes WHERE ID_CLIENTES = '$id'";
		$sql = $this->con->query($query);
		if ($sql == true) {
			header("Location:CLIENTES.php?msg3=eliminar");
		} else {
			header("Location:CLIENTES.php?msg4=eliminar");
		}
	}
}
