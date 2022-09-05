<?php include("../conexiondb.php") ?>
<?php include("../../../src/includes/header.php") ?>

<main>
	<div class="container p-4">
		<div class="row">
			<div class="col col-md-4">
			<?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
				         <?= $_SESSION['message'] ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php session_unset();} ?>
				<div class="card card-body">
					<form action="../save_task_empleados.php" method="post">
						<div class="form-group">
							<input type="text" name="nombre" id="" placeholder="Ingrese El nombre" class="form-control my-2">
						</div>
						<div class="form-group">
							<input type="text" name="identificacion" id="" placeholder="Ingrese la identificacion" class="form-control my-2">
						</div>
						<div class="form-group">
							<input type="number" name="edad" id="" placeholder="Ingrese su edad" class="form-control my-2">
						</div>
						<input type="submit" value="Guardar" name="save_task_empleados" class="btn btn-success btn-block" >
					</form>
				</div>
			</div>
			<div class="col col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Identificacion</th>
							<th>Edad</th>
							<th>Fecha</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$query = "SELECT * FROM empleados";
						$resultado_empleados = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($resultado_empleados)) {
						?>
						<tr>
							<td><?php echo $row['nombre']?></td>
							<td><?php echo $row['identificacion']?></td>
							<td><?php echo $row['edad']?></td>
							<td><?php echo $row['fecha']?></td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>


<?php include("../../../src/includes/footer.php") ?>