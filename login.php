</style>
<?php
$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
  header('location: ../');
} else {
  if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
      $alert = '<div class="alert alert-danger" role="alert">
  Ingrese su usuario y su clave
</div>';
    } else {
      require_once "conexion.php";
      $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
      $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
      $query = mysqli_query($conexion, "SELECT u.idusuario, u.nombre, u.correo,u.usuario,r.idrol,r.rol FROM usuario u INNER JOIN rol r ON u.rol = r.idrol WHERE u.usuario = '$user' AND u.clave = '$clave'");
      mysqli_close($conexion);
      $resultado = mysqli_num_rows($query);
      if ($resultado > 0) {
        $dato = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $dato['idusuario'];
        $_SESSION['nombre'] = $dato['nombre'];
        $_SESSION['email'] = $dato['correo'];
        $_SESSION['user'] = $dato['usuario'];
        $_SESSION['rol'] = $dato['idrol'];
        $_SESSION['rol_name'] = $dato['rol'];
        header('location: sistema/index.php');
        die();
      } else {
        $alert = '<div class="alert alert-danger" role="alert">
              Usuario o Contraseña Incorrecta
            </div>';
        session_destroy();
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Entregas AM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="sistema/assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="sistema/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="sistema/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="sistema/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="sistema/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="sistema/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="sistema/assets/css/main.css" rel="stylesheet">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Mina&display=swap');

    * {
      font-family: 'Mina', sans-serif;
    }
    /* ---------------------------Login --------------------------*/
    .title {
      position: relative;
    }
    .img-login {
      background-image: url(sistema/img/servicios.jpg);
      background-position: center center;
      background-size: cover;
    }
    .title::before {
      content: '';
      position: absolute;
      bottom: 0px;
      background: rgb(128, 0, 0);
      width: 72px;
      height: 3px;
    }
  </style>
  <!-- =======================================================
  * Template Name: Yummy - v1.1.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-xl d-flex align-items-center justify-content-between">

      <a href="sistema/inicio.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 style="font-family: 'Mina', sans-serif;"><b>ENTREGAS<span> AM</span></b></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="sistema/inicio.php" style="font-family: 'Mina', sans-serif;">Inicio</a></li>
          <li><a href="sistema/inicio.php #about" style="font-family: 'Mina', sans-serif;">Nuestra empresa</a></li>
          <li><a href="sistema/inicio.php #why-us" style="font-family: 'Mina', sans-serif;">¿Por qué nosotros?</a></li>
          <li><a href="sistema/inicio.php #menu" style="font-family: 'Mina', sans-serif;">Nuestros servicios</a></li>

          <li><a href="sistema/inicio.php #chefs" style="font-family: 'Mina', sans-serif;">Nuestro personal</i></a>

          </li>
          <li><a href="sistema/inicio.php #contact" style="font-family: 'Mina', sans-serif;">Contáctanos</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="container w-75 rounded shadow" style="margin-top: 136px; margin-bottom: 136px">
    <div class="row align-items-stretch">

      <div class="col p-5 rounded-end">
        <!-- LOGIN -->
        <h2 class="title">Iniciar Sesión</h2>
        <form class="user" method="POST" class="mt-4">
          <?php echo isset($alert) ? $alert : ""; ?>
          <div class="form-group mb-4 pt-4">
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
          </div>

          <div class="form-group pt-2">
            <label for="**********">Contraseña</label>
            <input type="password" class="form-control" placeholder="Contraseña" name="clave">
          </div>
          <div class="d-flex justify-content-start mt-4">
            <input type="submit" class="btn text-white" value="Iniciar Sesión" style="background-color: #800000;"></input>
          </div>
        </form>
        <hr>
      </div>

      <div class="col img-login rounded-end d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
      </div>
    </div>
  </div>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="container">
  <div class="row gy-3 mb-5">
    <div class="col-lg-3 col-md-6">
      <div class="inf d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <h4>Dirección</h4>
      </div>
      <p class="pt-2">
          Calle 25D # 85B - 64<br>
          Bogotá D.C - Colombia<br>
        </p>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <div class="inf d-flex">
        <i class="bi bi-telephone icon"></i>
        <h4>Contáctanos al</h4>
      </div>
      <p class="pt-2">
          <strong>Celular:</strong> +57 314 240 1638<br>
          <strong>Email:</strong> info@entregas-am.com<br>
      </p>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <div class="inf d-flex">
        <i class="bi bi-clock icon"></i>
        <h4>Horarios</h4>
      </div>
      <p class="pt-2">
          <strong>Lun-Vie: </strong>7AM - 7PM<br>
          <strong>Sab: </strong>7AM - 3PM<br>
          <strong>Dom-Fest:</strong> Cerrado
        </p>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4>Síguenos en nuestras redes sociales</h4>
      <div class="social-links d-flex flex-row">
      <a href="https://twitter.com/entregas_am" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100086792524461" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/entregas_am_ltda/" class="instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCTWBL00mOdc0518sHcOW3rA" class="youtube" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube"></i></a>
         
      </div>
    </div>

  </div>
</div>
<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Lorena Mora</span></strong>. Todos los derechos reservados
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
    
  </div>
</div>

</footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="sistema/assets/js/main.js"></script>

</body>

</html>