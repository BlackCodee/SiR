<?php
include "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombre_cliente']) || empty($_POST['celular_cliente']) || empty($_POST['ciudad']) || empty($_POST['direccion_recogida'])|| empty($_POST['nom_aux'])|| empty($_POST['nom_con'])|| empty($_POST['placa_carro'])|| empty($_POST['nombre_estadore'])|| empty($_POST['fecha'])|| empty($_POST['hora_desde']) || empty($_POST['hora_hasta'])) {
    $alert = '<div class="alert alert-danger" role="alert">
                Todo los campos son obligatorios
              </div>';
  } else {
      $id_recogida = $_GET['id_recogida'];
      $nombre_cliente = $_POST['nombre_cliente'];
      $celular_cliente = $_POST['celular_cliente'];
      $ciudad = $_POST['ciudad'];
      $direccion_recogida = $_POST['direccion_recogida'];
      $nom_aux = $_POST['nom_aux'];
      $nom_con = $_POST['nom_con'];
      $placa_carro = $_POST['placa_carro'];
      $nombre_estadore = $_POST['nombre_estadore'];
      $fecha = $_POST['fecha'];
      $hora_desde = $_POST['hora_desde'];
      $hora_hasta = $_POST['hora_hasta'];
      $usuario_id = $_SESSION['idUser'];
 $sql_update = mysqli_query($conexion, "UPDATE recogidas SET nombre_cliente = '$nombre_cliente', celular_cliente = '$celular_cliente', ciudad = '$ciudad', nom_aux = '$nom_aux', nom_con = '$nom_con', placa_carro = '$placa_carro', nombre_estadore = '$nombre_estadore', fecha = '$fecha', hora_desde = '$hora_desde', hora_hasta = '$hora_hasta' WHERE id_recogida = $id_recogida");
    $alert = '<div class="alert alert-primary" role="alert">
                            Servicio actualizado
                        </div>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['id_recogida'])) {
  header("Location: lista_servicios.php");
}
$id_recogida = $_REQUEST['id_recogida'];
$sql = mysqli_query($conexion, "SELECT * FROM recogidas WHERE id_recogida = $id_recogida");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_servicios.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id_recogida = $data['id_recogida'];
    $nombre_cliente = $data['nombre_cliente'];
    $celular_cliente = $data['celular_cliente'];
    $ciudad = $data['ciudad'];
    $direccion_recogida = $data['direccion_recogida'];
    $asignado_por = $data['asignado_por'];
    $nom_aux = $data['nom_aux'];
    $nom_con = $data['nom_con'];
    $placa_carro = $data['placa_carro'];
    $nombre_estadore = $data['nombre_estadore'];
    $fecha = $data['fecha'];
    $hora_desde = $data['hora_desde'];
    $hora_hasta = $data['hora_hasta'];
  }
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Ajustar servicio</b></h3>
     <a href="lista_servicios.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Servicios</p></a>
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
              <label for="nombre_cliente">Nombre cliente</label>
              <input type="text" placeholder="Ingrese el cliente" class="form-control" name="nombre_cliente" id="nombre_cliente" value="<?php echo $nombre_cliente; ?>">
            </div>

            <div class="col-md-6 mb-3">
              <label for="celular_cliente">Celular cliente</label>
              <input type="text" placeholder="Ingrese el celular del cliente" class="form-control" name="celular_cliente" id="celular_cliente" value="<?php echo $celular_cliente; ?>">
            </div>
        </div>
   
        <div class="form-row">
        <div class="col-md-6 mb-3">
              <label for="direccion_recogida">Direccion de recogida </label>
              <input type="text" placeholder="Ingrese la direccion de recogida" class="form-control" name="direccion_recogida" id="direccion_recogida" value="<?php echo $direccion_recogida; ?>">
            </div>
            
            <div class="col-md-6 mb-3">
              <label for="fecha">Fecha </label>
              <input type="date" placeholder="Ingrese la fecha" class="form-control" name="fecha" id="fecha" value="<?php echo $fecha; ?>">
            </div>

            

            
        </div>


        <div class="form-row">
        
        <div class="col-md-6 mb-3">
            <label style="color: #000000;">Ciudad</label>
            <input class="form-control" name="ciudad" id="ciudad" value="<?php echo $ciudad; ?>" disabled>    
          <select id="ciudad" name="ciudad" class="form-control" >

            <option value="<?php echo $ciudad; ?>">
              
            </option>
           <?php
   $conn = mysqli_connect("localhost", "root", "", "sir");
   $result = mysqli_query($conn,"SELECT * FROM `ciudad_origen` where estado = 'activo'");
   if(mysqli_num_rows($result) > 0){
       while($ciudad_origen = mysqli_fetch_assoc($result)){
           ?>
                <option><?php echo $ciudad_origen['ciudad']; ?></option>
            <?php
       }
   }else{
        echo "No Records Found!";
   }
?>
          
          </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="placa_carro">Placa carro </label>
              <input class="form-control" name="placa_carro" id="placa_carro" value="<?php echo $placa_carro; ?>" disabled>

              <select id="placa_carro" name="placa_carro" class="form-control">
                <option value="<?php echo $placa_carro; ?>">
              
            </option>
            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `carro` where estado = 'activo'");
    if(mysqli_num_rows($result) > 0){
        while($carro = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $carro['placa_carro']; ?>"><?php echo $carro['placa_carro']; ?></option>
             <?php
        }
    }else{
         echo "No Records Found!";
    }
?>
           
           </select>
            </div>
  </div>

        <div class="form-row">
           
        <div class="col-md-6 mb-3">
              <label for="nom_con">Conductor </label>
              <input class="form-control" name="nom_con" id="nom_con" value="<?php echo $nom_con; ?>" disabled>
              <select id="nom_con" name="nom_con" class="form-control">
                <option value="<?php echo $nom_con; ?>">
              
            </option>
            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `conductor` where estado = 'activo'");
    if(mysqli_num_rows($result) > 0){
        while($conductor = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $conductor['nom_con']; ?>"><?php echo $conductor['nom_con']; ?></option>
             <?php
        }
    }else{
         echo "No Records Found!";
    }
?>
           
           </select>
            </div>

           

            <div class="col-md-6 mb-3">
              <label for="nom_aux">Auxiliar </label>
              <input class="form-control" name="nom_aux" id="nom_aux" value="<?php echo $nom_aux; ?>" disabled>
              <select id="nom_aux" name="nom_aux" class="form-control">
                <option value="<?php echo $nom_aux; ?>">
              
            </option>
            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `auxiliar` where estado = 'activo'");
    if(mysqli_num_rows($result) > 0){
        while($auxiliar = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $auxiliar['nom_aux']; ?>"><?php echo $auxiliar['nom_aux']; ?></option>
             <?php
        }
    }else{
         echo "No Records Found!";
    }
?>
           
           </select>
            </div>
        </div>

        <div class="form-row">
            


           
        </div>

        <div class="form-row">
        <div class="col-md-6 mb-3">
              <label for="nombre_estadore">Estado servicio</label>
              <input class="form-control" name="nombre_estadore" id="nombre_estadore" value="<?php echo $nombre_estadore; ?>" disabled>

              <select id="nombre_estadore" name="nombre_estadore" class="form-control">
                <option value="<?php echo $nombre_estadore; ?>">
              
            </option>
            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `estado_recogida`");
    if(mysqli_num_rows($result) > 0){
        while($estado_recogida = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $estado_recogida['nombre_estadore']; ?>"><?php echo $estado_recogida['nombre_estadore']; ?></option>
             <?php
        }
    }else{
         echo "No Records Found!";
    }
?>
           
           </select>
            </div>



        
           
            <div class="col-md-6 mb-3">
              <label for="hora_desde">Desde - Hasta </label>
              <input type="time" placeholder="Ingrese la hora" class="form-control" name="hora_desde" id="hora_desde" value="<?php echo $hora_desde; ?>">
              <input type="time" placeholder="Ingrese la hora" class="form-control" name="hora_hasta" id="hora_hasta" value="<?php echo $hora_hasta; ?>">
            </div>
            </div>

            <div class="form-row">
            
        </div>
        </div>

        </div>
        <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-user-edit"></i> Editar Servicio</button>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>