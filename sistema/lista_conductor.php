<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	

	<div class="contenido">
			<div>
				<center>
					<h3>
						<b style="color: #000000;">Conductor</b>
						<a href="registrar_conductor.php"><i class='fa fa-plus-circle' style="color: #B9011D;"></i></a>
					</h3>
				</center>
			</div>
			
		<div class="row">
					<div class="col-md-12">
						<div class="card">					
							<div class="card-body" id="mydatatable-container">
								<div class="table-responsive">
									<table id="mydatatable"	class="records_list table table-striped table-bordered table-hover"	cellspacing="0" width="100%">
					<thead style="background-color: #FFFFFF;">
						<tr>
							
							<th style="color: #000000;">NOMBRE</th>
							<th style="color: #000000;">CELULAR</th>
							<th style="color: #000000;">ESTADO</th>
							<th style="color: #000000;">ACCIONES</th>
						</tr>
					</thead>
				
					<tbody>
						<?php
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM conductor WHERE id_con != 1");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									
									<td style="color: #000000;"><?php echo $data['nom_con']; ?></td>
									<td style="color: #000000;"><?php echo $data['celular']; ?></td>
									<td style="color: #000000;"><?php if($data['estado'] == 'activo') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['estado'] . '</span>'; }
 if($data['estado'] == 'inactivo') {
	echo '<span style="color:red; font-weight: bolder;">' .$data['estado'] . '</span>';
}  ?></td>
									<td style="color: #000000;">
										<a href="editar_conductor.php?id_con=<?php echo $data['id_con']; ?>" class="btn btn-outline-dark"><i class="fa fa-cog d-inline" aria-hidden="true"></i></a>
										<?php if ($_SESSION['rol'] == 1) { ?>
<form action="eliminar_conductor.php?id_con=<?php echo $data['id_con']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-outline-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
											<?php $data['id_con']; ?>
										</form>
<?php } ?>

									</td>	
								</tr>
						<?php }
						} ?>
					</tbody>
                    <tfoot style="background-color: #FFFFFF;">
                    	<tr>
							
							<th style="color: #000000;">NOMBRE</th>
							<th style="color: #000000;">CELULAR</th>
							<th style="color: #000000;">ESTADO</th>
							<th style="color: #000000;">ACCIONES</th>
						</tr>
                    </tfoot>
				</table>
			</div>
							</div>
						</div>
					</div>
				</div>
	</div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>