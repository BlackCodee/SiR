<?php
include "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['ciudad']) || empty($_POST['estado'])) {
    $alert = '<div class="alert alert-danger" role="alert">
                Todos los campos son obligatorios
              </div>';
  } else {
      $cod = $_GET['cod'];
      $ciudad = $_POST['ciudad'];
      $estado = $_POST['estado'];

 $sql_update = mysqli_query($conexion, "UPDATE ciudad_origen SET ciudad = '$ciudad', estado = '$estado' WHERE cod = $cod");
    $alert = '<div class="alert alert-primary" role="alert">
                            Ciudad actualizada
                        </div>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['cod'])) {
  header("Location: lista_auxiliar.php");
}
$cod = $_REQUEST['cod'];
$sql = mysqli_query($conexion, "SELECT * FROM ciudad_origen WHERE cod = $cod");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_ciudad.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $cod = $data['cod'];
    $ciudad = $data['ciudad'];
    $estado = $data['estado'];
  }
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Ajustar ciudad</b></h3>
     <a href="lista_ciudad.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ciudades</p></a>
     </center>
     
   </div>
<br>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 ml-2">
       <form action="" method="post" autocomplete="off">
         <?php echo isset($alert) ? $alert : ''; ?>
        
        <input type="hidden" name="cod" value="<?php echo $cod; ?>">
        
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="ciudad">Ciudad </label>
              <input type="text" placeholder="Ingrese la ciudad" class="form-control" name="ciudad" id="ciudad" value="<?php echo $ciudad; ?>">
            </div>
            <div class="col-md-6 mb-3">
              <label style="color: #000000;">Estado </label>
          <input class="form-control" name="estado" id="estado" value="<?php echo $estado; ?>" disabled>
           <select id="estado" name="estado" class="form-control">
            <option value="<?php echo $estado; ?>">
              
            </option>
            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `estado`");
    if(mysqli_num_rows($result) > 0){
        while($estado = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $estado['estado']; ?>"><?php echo $estado['estado']; ?></option>
             <?php
        }
    }else{
         echo "No Records Found!";
    }
?>
           
           </select>
            </div>
        </div>

        </div>
        <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-user-edit"></i> Editar Ciudad</button>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?><?php
