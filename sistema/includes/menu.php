<style type="text/css">


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');

*{
	font-family: 'Poppins', sans-serif;
}


.menuu{
	background: #800000;
}

.border-left-pers {
    border-left: .25rem solid #800000 !important;
}
.bg-pers {
	background-color: #800000 !important;
}
.icon {
	margin-top: 5px;
	float: right;
}
@media (max-width: 577px) {
	.icon {
		display: none;
	}
}
</style>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion menuu" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<i style="font-size: 2rem"class="d-lg-none d-xl-none d-md-none bi bi-house-fill"></i>
		<div class="d-none d-lg-block d-xl-block d-md-block sidebar-brand-text mx-3">ENTREGAS AM LTDA</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<?php if ($_SESSION['rol'] == 1) { ?>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span><b>Usuarios</b></span>
			<i class="icon fas fa-angle-down"></i>
		</a>
		<?php }?>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_usuario.php" style="color: #000000;">Nuevo Usuario</a>
				<a class="collapse-item" href="lista_usuarios.php" style="color: #000000;">Usuarios</a>
			</div>
		</div>
	</li>
    

	<!-- Nav Item - Productos Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span><b>Servicios</b></span>
			<i class="icon fas fa-angle-down"></i>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_servicio.php" style="color: #000000;">Nuevo servicio</a>
				<a class="collapse-item" href="lista_servicios.php" style="color: #000000;">Servicios</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Clientes Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-users"></i>
			<span><b>Auxiliares</b></span>
			<i class="icon fas fa-angle-down"></i>
		</a>
		<div id="collapseClientes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registrar_auxiliar.php" style="color: #000000;">Nuevo Auxiliar</a>
				<a class="collapse-item" href="lista_auxiliar.php" style="color: #000000;">Auxiliares</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Clientes Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes2" aria-expanded="true" aria-controls="collapseUtilities">
		<i class="fa fa-briefcase" aria-hidden="true"></i>
			<span><b>Conductores</b></span>
			<i class="icon fas fa-angle-down"></i>
		</a>
		<div id="collapseClientes2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registrar_conductor.php" style="color: #000000;">Nuevo Conductor</a>
				<a class="collapse-item" href="lista_conductor.php" style="color: #000000;">Conductores</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-car"></i>
			<span><b>Carros</b></span>
			<i class="icon fas fa-angle-down"></i>
		</a>
		<div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_carros.php" style="color: #000000;">Nuevo carro</a>
				<a class="collapse-item" href="lista_carros.php" style="color: #000000;">Carros</a>
			</div>
		</div>
	</li>
	
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCiudad" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fa fa-university" aria-hidden="true"></i>
			<span><b>Ciudades</b></span>
			<i class="icon fas fa-angle-down"></i>
		</a>
		<div id="collapseCiudad" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_ciudad.php" style="color: #000000;">Nueva ciudad</a>
				<a class="collapse-item" href="lista_ciudad.php" style="color: #000000;">Ciudades</a>
			</div>
		</div>
	</li>

</ul>