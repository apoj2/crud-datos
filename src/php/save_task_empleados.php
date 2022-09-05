<?php 
include("./conexiondb.php");
if(isset($_POST["save_task_empleados"])){

	$nombre = $_POST['nombre'];
	$identificacion = $_POST['identificacion'];
	$edad = $_POST['edad'];

	$query= "INSERT INTO empleados(nombre,identificacion, edad) VALUES ('$nombre','$identificacion','$edad')";

	$resultado = mysqli_query($conn,$query);


	if(!$resultado){
		die("query failed");
	}

	$_SESSION['message'] = 'Task saved succesfully';
    $_SESSION['message_type']= 'success';
	header("Location: ./Empleados/registro.php");
	
}

?>