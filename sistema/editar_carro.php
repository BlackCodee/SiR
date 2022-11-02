<?php
include "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['placa_carro']) || empty($_POST['propiedad_de']) || empty($_POST['novedades']) || empty($_POST['estado'])) {
    $alert = '<div class="alert alert-danger" role="alert">
                Todos los campos son obligatorios
              </div>';
  } else {
      $id_carro = $_GET['id_carro'];
      $placa_carro = $_POST['placa_carro'];
      $propiedad_de = $_POST['propiedad_de'];
      $novedades = $_POST['novedades'];
      $estado = $_POST['estado'];
      $usuario_id = $_SESSION['idUser'];

 $sql_update = mysqli_query($conexion, "UPDATE carro SET placa_carro = '$placa_carro', propiedad_de = '$propiedad_de', novedades = '$novedades', estado = '$estado' WHERE id_carro = $id_carro");
    $alert = '<div class="alert alert-primary" role="alert">
                            Carro actualizado
                        </div>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['id_carro'])) {
  header("Location: lista_carros.php");
}
$id_carro = $_REQUEST['id_carro'];
$sql = mysqli_query($conexion, "SELECT * FROM carro WHERE id_carro = $id_carro");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_auxiliar.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id_carro = $data['id_carro'];
    $placa_carro = $data['placa_carro'];
    $propiedad_de = $data['propiedad_de'];
    $novedades = $data['novedades'];
    $estado = $data['estado'];
  }
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Ajustar carro</b></h3>
     <a href="lista_carros.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Carros</p></a>
     </center>
     
   </div>
<br>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 ml-2">
       <form action="" method="post" autocomplete="off">
         <?php echo isset($alert) ? $alert : ''; ?>
        
        <input type="hidden" name="id_recogida" value="<?php echo $id_recogida; ?>">
        
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="placa_carro">Placa carro </label>
              <input type="text" placeholder="Ingrese la placa" class="form-control" name="placa_carro" id="placa_carro" value="<?php echo $placa_carro; ?>">
            </div>
            <div class="col-md-6 mb-3">
           <label for="novedades">Novedades </label>
              <input type="text" placeholder="Ingrese las novedades" class="form-control" name="novedades" id="novedades" value="<?php echo $novedades; ?>">
            </div>
            
        </div>
   
        <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="propiedad_de">Propiedad de </label>
              <input class="form-control" name="propiedad_de" id="propiedad_de" value="<?php echo $propiedad_de; ?>" disabled>
              <select id="propiedad_de" name="propiedad_de" class="form-control">
            <option value="<?php echo $propiedad_de; ?>">
              
            </option>
            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `propiedad_de`");
    if(mysqli_num_rows($result) > 0){
        while($propiedad_de = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $propiedad_de['propiedad_de']; ?>"><?php echo $propiedad_de['propiedad_de']; ?></option>
             <?php
        }
    }else{
         echo "No Records Found!";
    }
?>
           
           </select>
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

        </div>
        <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-user-edit"></i> Editar Carro</button>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>