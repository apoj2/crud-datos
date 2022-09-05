<?php
include("./conexiondb.php");
if(isset($_POST["save_task"])){
	
	$title = $_POST['title'];
	$descripcion = $_POST['descripcion'];
	

	$query = "INSERT INTO task(titulo, descripcion) VALUES ('$title', '$descripcion')";
	$resultado = mysqli_query($conn, $query);

	if(!$resultado){
		die("query failed");
		
		
	}

	$_SESSION['message'] = 'Task saved succesfully';
    $_SESSION['message_type']= 'success';

	header("Location: ../../index.php");
}
?>