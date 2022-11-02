<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	
    <div class="contenido">
			<div>
				<center>
					<h3>
						<b style="color: #000000;">Servicios</b>
						<a href="registro_servicio.php"><i class='fa fa-plus-circle' style="color: #B9011D;"></i></a>
					</h3>
				</center>
			</div>
		
	
				<div class="row">
					<div class="col-md-12">
						<div class="card">					
							<div class="card-body" id="mydatatable-container">
								<div class="table-responsive">
									<table id="mydatatable"	class="records_list table table-striped table-bordered table-hover"	cellspacing="0" width="100%">
										<thead style="color: #FFFFFF;">
										    <th style="color: #000000;">POR</th>
											<th style="color: #000000;">CLIENTE</th>
											<th style="color: #000000;">CEL.</th>
											<th style="color: #000000;">CIUDAD</th>
											<th style="color: #000000;">DIRECCIÓN</th>
											<th style="color: #000000;">AUXILIAR</th>
											<th style="color: #000000;">CONDUCTOR</th>
											<th style="color: #000000;">CARRO</th>
											<th style="color: #000000;">FECHA</th>
											<th style="color: #000000;">DESDE</th>
											<th style="color: #000000;">HASTA</th>
											<th style="color: #000000;">ESTADO</th>
											<th style="color: #000000;">MÁS</th>
											
										</thead>
										<tbody>
					<?php 
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM recogidas");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
								<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['asignado_por'] . '</span>'; }
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['asignado_por'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['asignado_por'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['asignado_por'] . '</span>';
}?></td>
							        
                        
						            
									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['nombre_cliente'] . '</span>'; }
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['nombre_cliente'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['nombre_cliente'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['nombre_cliente'] . '</span>';
}?></td>

<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['celular_cliente'] . '</span>'; }
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['celular_cliente'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['celular_cliente'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['celular_cliente'] . '</span>';
} ?></td>


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['ciudad'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['ciudad'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['ciudad'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['ciudad'] . '</span>';
} ?></td>


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['direccion_recogida'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['direccion_recogida'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['direccion_recogida'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['direccion_recogida'] . '</span>';
}?></td>



									


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['nom_aux'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['nom_aux'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['nom_aux'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['nom_aux'] . '</span>';
} ?></td>

<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['nom_con'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['nom_con'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['nom_con'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['nom_con'] . '</span>';
} ?></td>


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['placa_carro'] . '</span>'; }
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['placa_carro'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['placa_carro'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['placa_carro'] . '</span>';
}?></td>


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['fecha'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['fecha'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['fecha'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['fecha'] . '</span>';
}?></td>


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['hora_desde'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['hora_desde'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['hora_desde'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['hora_desde'] . '</span>';
} ?></td>

<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['hora_hasta'] . '</span>'; } 
 if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['hora_hasta'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['hora_hasta'] . '</span>';
} else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['hora_hasta'] . '</span>';
} ?></td>


									<td style="color: #000000;"><?php if($data['nombre_estadore'] == 'EFECTIVA') {
 echo '<span style="color:green; font-weight: bolder;">' .$data['nombre_estadore'] . '</span>';
} if($data['nombre_estadore'] == 'NO REALIZADA') {
	echo '<span style="color:blue; font-weight: bolder;">' .$data['nombre_estadore'] . '</span>';
} else if($data['nombre_estadore'] == 'POR RECOGER'){
	echo '<span style="color:#7800A9; font-weight: bolder;">' .$data['nombre_estadore'] . '</span>';
}
else if($data['nombre_estadore'] == 'POR ASIGNAR'){
	echo '<span style="color:red; font-weight: bolder;">' .$data['nombre_estadore'] . '</span>';
}
?>
									</td>
									
									<td>
										<a href="editar_servicio.php?id_recogida=<?php echo $data['id_recogida']; ?>" class="btn btn-outline-dark"><i class="fa fa-cog d-inline" aria-hidden="true"></i></a>
                                           
										<?php if ($_SESSION['rol'] == 1) { ?>
										<form action="eliminar_servicio.php?id_recogida=<?php echo $data['id_recogida']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-outline-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
											<?php $data['id_recogida']; ?>
										</form>
										<?php } ?>
										
									</td>	
								</tr>
						<?php }
						} ?>
										</tbody>
								<tfoot style="color: #FFFFFF;">
									<th style="color: #000000;">POR</th>
											<th style="color: #000000;">CLIENTE</th>
											<th style="color: #000000;">CEL.</th>
											<th style="color: #000000;">CIUDAD</th>
											<th style="color: #000000;">DIRECCIÓN</th>
											<th style="color: #000000;">AUXILIAR</th>
											<th style="color: #000000;">CONDUCTOR</th>
											<th style="color: #000000;">CARRO</th>
											<th style="color: #000000;">FECHA</th>
											<th style="color: #000000;">DESDE</th>
											<th style="color: #000000;">HASTA</th>
											<th style="color: #000000;">ESTADO</th>
											<th style="color: #000000;">MÁS</th>
								</tfoot>		
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			<br>
			
                    <h5>
						
						<?php if ($_SESSION['rol'] == 1) { ?>
						<a href="registro_ciudad.php" style="text-decoration:none"><i class='fa fa-plus-circle' style="color: #B9011D;"></i><b style="color: #000000;"> Agregar ciudad</b></a> <?php } ?>
					</h5>
			
		</div>

		
	
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script>
	$(".confirmar").submit(function(e) {
  e.preventDefault();
  Swal.fire({
    title: 'Esta seguro de eliminar?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'SI, Eliminar!'
  }).then((result) => {
    if (result.isConfirmed) {
      this.submit();
    }
  })
})
</script>
<?php include_once "includes/footer.php"; ?>