<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}
include "includes/functions.php";
include "../conexion.php";
// datos Empresa
$dni = '';
$nombre_empresa = '';
$razonSocial = '';
$emailEmpresa = '';
$telEmpresa = '';
$dirEmpresa = '';

$query_empresa = mysqli_query($conexion, "SELECT * FROM configuracion");
$row_empresa = mysqli_num_rows($query_empresa);
if ($row_empresa > 0) {
	if ($infoEmpresa = mysqli_fetch_assoc($query_empresa)) {
		$dni = $infoEmpresa['dni'];
		$nombre_empresa = $infoEmpresa['nombre'];
		$razonSocial = $infoEmpresa['razon_social'];
		$telEmpresa = $infoEmpresa['telefono'];
		$emailEmpresa = $infoEmpresa['email'];
		$dirEmpresa = $infoEmpresa['direccion'];
	}
}
$query_data = mysqli_query($conexion, "SELECT * FROM configuracion");
$result_data = mysqli_num_rows($query_data);
if ($result_data > 0) {
	$data = mysqli_fetch_assoc($query_data);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="/librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="/librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="/librerias/select2/css/select2.css">
    <link href="assets/img/logo.png" rel="icon">
	<title>Entregas AM</title>

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>

    <!-- Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>



    <!-- ALERTS -->
    <link href="/assets/css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/sweetalert.min.js" type="text/javascript"></script>
    <style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

		*{
		font-family: 'Poppins', sans-serif;
		}
		.dropdown-item:active{
			background-color: #800000;
		}
	</style>
</head>

<body id="page-top">
	
	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php include_once "includes/menu.php"; ?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-light text-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" style="color: #800000" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<div class="input-group">
						<p class="mr-auto mb-0 d-none d-lg-inline d-md-inline d-xl-inline" style="color: #000000;">Bogotá, <?php echo fechaPeru(); ?></p>
					</div>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">


						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown mr-5">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<h6 style="color: #000000;" class="mr-2 mb-0"><b>SiR</b></h6>
								<div class="topbar-divider d-sm-block"></div>
								<span class="d-none d-lg-inline d-md-inline small" style="color: #000000;"><?php echo $_SESSION['nombre']; ?>
								</span>
								<i style="color:#800000; font-size: 1.3rem"class="ml-3 d-sm-inline    fas fa-solid fa-angle-right"></i>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2"></i>
									<?php echo $_SESSION['email']; ?>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="salir.php">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
									Salir
								</a>
							</div>
						</li>

					</ul>

				</nav>
