
 
 <?php include_once "includes/header.php";
  include "../conexion.php";
  if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre_cliente']) || empty($_POST['celular_cliente']) || empty($_POST['direccion_recogida']) || empty($_POST['fecha'])|| empty($_POST['ciudad']) || empty($_POST['nom_con']) || empty($_POST['nom_aux'])|| empty($_POST['placa_carro'])|| empty($_POST['nombre_estadore'])|| empty($_POST['hora_desde']) || empty($_POST['hora_hasta'])) {
      $alert = '<div class="alert alert-danger" role="alert">
                Todos los campos son obligatorios
              </div>';
    } else {

      $asignado_por = $_SESSION['nombre'];
      $nombre_cliente = $_POST['nombre_cliente'];
      $celular_cliente = $_POST['celular_cliente'];
      $direccion_recogida = $_POST['direccion_recogida'];
      $fecha = $_POST['fecha'];
      $ciudad = $_POST['ciudad'];
      $nom_con = $_POST['nom_con'];
      $nom_aux = $_POST['nom_aux'];
      $placa_carro = $_POST['placa_carro'];
      $nombre_estadore = $_POST['nombre_estadore'];
      $hora_desde = $_POST['hora_desde'];
      $hora_hasta = $_POST['hora_hasta'];
      $usuario_id = $_SESSION['idUser'];
      $query_insert = mysqli_query($conexion, "INSERT INTO recogidas(asignado_por,nombre_cliente,celular_cliente,direccion_recogida,fecha,ciudad,nom_con,nom_aux,placa_carro,nombre_estadore,hora_desde,hora_hasta,usuario_id) values ('$asignado_por', '$nombre_cliente', '$celular_cliente', '$direccion_recogida', '$fecha', '$ciudad', '$nom_con', '$nom_aux', '$placa_carro','$nombre_estadore', '$hora_desde', '$hora_hasta', '$usuario_id')");
      if ($query_insert) {
        $alert = '<div class="alert alert-primary" role="alert">
                Servicio Registrado
              </div>';
      } else {
        $alert = '<div class="alert alert-danger" role="alert">
                Error al registrar el servicio
              </div>';
      }
    }
  }
  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Realizar servicio</b></h3>
     <a href="lista_servicios.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Servicios</p></a>
     </center>
     <br>
   </div>

 <div class="container">
    <div class="row">
        <div class="col-lg-12 ml-2">
       <form action="" method="post" autocomplete="off">
         <?php echo isset($alert) ? $alert : ''; ?>
        <div class="form-row">
          <div class="col-md-6 mb-3">
          <label for="asignado_por">Solicitado por </label>
              <input class="form-control" name="asignado_por" id="asignado_por" value="<?php echo $_SESSION['nombre']; ?>" disabled>
        </div>
          <div class="col-md-6 mb-3">
           <label for="nombre_cliente" style="color: #000000;">Nombre cliente: </label>
           <input type="text" placeholder="Ingrese el cliente" name="nombre_cliente" id="nombre_cliente" class="form-control">
         </div>

        </div>

        <div class="form-row">
         <div class="col-md-6 mb-3">
           <label for="celular_cliente" style="color: #000000;">Celular cliente: </label>
           <input type="text" placeholder="Ingrese el celular del cliente" name="celular_cliente" id="celular_cliente" class="form-control">
         </div>

          <div class="col-md-6 mb-3">
          <label for="direccion_recogida" style="color: #000000;">Dirección recogida: </label>
           <input type="text" placeholder="Ingrese la dirección de recogida" name="direccion_recogida" id="direccion_recogida" class="form-control">

           
         </div>

          
        </div>


        <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="fecha" style="color: #000000;">Fecha: </label>
           <input type="date" name="fecha" id="fecha" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
          
           <label style="color: #000000;">Ciudad</label>
          
           <select id="ciudad" name="ciudad" class="form-control">

            <?php
    $conn = mysqli_connect("localhost", "root", "", "sir");
    $result = mysqli_query($conn,"SELECT * FROM `ciudad_origen` where estado = 'activo' ORDER BY ciudad ASC");
    if(mysqli_num_rows($result) > 0){
        while($ciudad_origen = mysqli_fetch_assoc($result)){
            ?>
                 <option value="<?php echo $ciudad_origen['ciudad']; ?>"><?php echo $ciudad_origen['ciudad']; ?></option>
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
          <label style="color: #000000;">Conductor </label>
          
          <select id="nom_con" name="nom_con" class="form-control">

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

            <label style="color: #000000;">Auxiliar </label>
          
           <select id="nom_aux" name="nom_aux" class="form-control">

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
          
          <div class="col-md-6 mb-3">
            <label style="color: #000000;">Carro </label>
          
           <select id="placa_carro" name="placa_carro" class="form-control">

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

        
          <div class="col-md-6 mb-3">
           <label style="color: #000000;">Estado recogida </label>
          
           <select id="nombre_estadore" name="nombre_estadore" class="form-control">

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
          
        </div>





        <div class="form-row">
          <div class="col-md-6 mb-3">
          <label style="color: #000000;">Desde </label>
          
          <input type="time" placeholder="Ingrese la hora" class="form-control" name="hora_desde" id="hora_desde" value="<?php echo $hora_desde; ?>">
      
         </div>
          
         
          <div class="col-md-6 mb-3">
           
          <label style="color: #000000;">Hasta </label>
          
          <input type="time" placeholder="Ingrese la hora" class="form-control" name="hora_hasta" id="hora_hasta" value="<?php echo $hora_hasta; ?>">
      
             </div>
        
      

        </div>
         <br>
         <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-save"></i> Guardar servicio</button>
       </form>
     </div>
   </div>


 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->
 <?php include_once "includes/footer.php"; ?>