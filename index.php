<?php include("./src/php/conexiondb.php") ?>
<?php include("./src/includes/header.php") ?>

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
					<form action="./src/php/save_task.php" method="POST">
						<div class="form-group">
							<input type="text" name="title" class="form-control my-2" placeholder="Añade la tarea"  id="title">
						</div>
						<div class="form-group">
							<textarea name="descripcion" id="descripcion" rows="2" class="form-control my-2" placeholder="Añade descripcion"></textarea>
						</div>
						<input type="submit" class="btn btn-success btn-block" name="save_task" value="save task">
					</form>
				</div>
			</div>
			<div class="col col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>title</th>
							<th>descripcion</th>
							<th>Created at</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$query = "SELECT * FROM task";
					$result_tasks = mysqli_query($conn, $query);

					while($row = mysqli_fetch_array($result_tasks)) { ?>
						<tr>
							<td><?php echo $row['titulo'] ?></td>
							<td><?php echo $row['descripcion'] ?></td>
							<td><?php echo $row['created_at'] ?></td>
							<td></td>
						</tr>
					<?php } ?>

					</tbody>
				</table>

			</div>
		</div>
	</div>
</main>


<?php include("./src/includes/footer.php") ?>