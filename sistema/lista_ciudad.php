<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	
    <div class="contenido">
			<div>
				<center>
					<h3>
						<b style="color: #000000;">Ciudades</b>
						
						<a href="registro_ciudad.php"><i class='fa fa-plus-circle' style="color: #B9011D;"></i></a>
					</h3>
				</center>
			</div>
			<br>
	<div class="row">
					<div class="col-md-12">
						<div class="card">					
							<div class="card-body" id="mydatatable-container">
								<div class="table-responsive">
									<table id="mydatatable"	class="records_list table table-striped table-bordered table-hover"	cellspacing="0" width="100%">
					<thead style="background-color: #FFFFFF;">
						<tr>
							<th style="color: #000000;">CIUDAD</th>
							<th style="color: #000000;">ESTADO</th>
							<th style="color: #000000;">ACCIONES</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM ciudad_origen ORDER BY ciudad ASC");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									
									<td style="color: #000000;"><?php echo $data['ciudad']; ?></td>
									<td style="color: #000000;"><?php if($data['estado'] == 'activo') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['estado'] . '</span>'; }
 if($data['estado'] == 'inactivo') {
	echo '<span style="color:red; font-weight: bolder;">' .$data['estado'] . '</span>';
}  ?></td>
									<td>
										<a href="editar_ciudad.php?cod=<?php echo $data['cod']; ?>" class="btn btn-outline-dark"><i class="fa fa-cog d-inline" aria-hidden="true"></i></a>
                                    
										<?php if ($_SESSION['rol'] == 1) { ?>
										<form action="eliminar_ciudad.php?cod=<?php echo $data['cod']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-outline-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
											<?php $data['cod']; ?>
										</form>
										<?php } ?>
									</td>
								</tr>
						<?php }
						} ?>
					</tbody>
                <tfoot>
                   	
							<th style="color: #000000;">CIUDAD</th>
							<th style="color: #000000;">ESTADO</th>
							<th style="color: #000000;">ACCIONES</th>
							
				    </tr>
                   </tfoot>
				</table>
				<br>
			</div>
							</div>
						</div>
					</div>
				</div>
			<br>
			
           
			
		</div>
	
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>