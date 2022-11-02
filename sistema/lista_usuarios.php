<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div>
		<center>
					<h3>
						<b style="color: #000000;">Usuarios</b>
						<?php if ($_SESSION['rol'] == 1) { ?>
		
		<a href="registro_usuario.php"><i class='fa fa-plus-circle' style="color: #B9011D;"></i></a>
		<?php } ?>
					</h3>
	</div>

	<div class="row">
					<div class="col-md-12">
						<div class="card">					
							<div class="card-body" id="mydatatable-container">
								<div class="table-responsive">
									<table id="mydatatable"	class="records_list table table-striped table-bordered table-hover"	cellspacing="0" width="100%">
					<thead style="color: #FFFFFF;">
						<tr>
							<th style="color: #000000;">ID</th>
							<th style="color: #000000;">NOMBRE</th>
							<th style="color: #000000;">CORREO</th>
							<th style="color: #000000;">USUARIO</th>
							<th style="color: #000000;">ROL</th>
							<th style="color: #000000;">ESTADO</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th style="color: #000000;">MÁS</th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.rol, u.estado FROM usuario u INNER JOIN rol r ON u.rol = r.idrol WHERE u.idusuario != 11");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td style="color: #000000;"><?php echo $data['idusuario']; ?></td>
									<td style="color: #000000;"><?php echo $data['nombre']; ?></td>
									<td style="color: #000000;"><?php echo $data['correo']; ?></td>
									<td style="color: #000000;"><?php echo $data['usuario']; ?></td>
									<td style="color: #000000;"><?php echo $data['rol']; ?></td>
									<td style="color: #000000;"><?php if($data['estado'] == 'activo') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['estado'] . '</span>'; }
 if($data['estado'] == 'inactivo') {
	echo '<span style="color:red; font-weight: bolder;">' .$data['estado'] . '</span>';
}  ?></td>
									
									<td>
										<a href="editar_usuario.php?id=<?php echo $data['idusuario']; ?>" class="btn btn-outline-dark"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                        <?php if ($_SESSION['rol'] == 1) { ?>
<form action="eliminar_usuario.php?id=<?php echo $data['idusuario']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-outline-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
											<?php $data['idusuario']; ?>
										</form>
<?php } ?>
									</td>
									
								</tr>
						<?php }
						} ?>
					</tbody>
                   <tfoot style="color: #FFFFFF;">
                   	<tr>
							<th style="color: #000000;">ID</th>
							<th style="color: #000000;">NOMBRE</th>
							<th style="color: #000000;">CORREO</th>
							<th style="color: #000000;">USUARIO</th>
							<th style="color: #000000;">ROL</th>
							<th style="color: #000000;">ESTADO</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th style="color: #000000;">ACCIONES</th>
							<?php }?>
						</tr>
                   </tfoot>
				</table>
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