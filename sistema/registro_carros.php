<?php
include_once "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['placa_carro']) || empty($_POST['propiedad_de']) || empty($_POST['novedades']) || empty($_POST['estado']))  {
        $alert = '<div class="alert alert-danger" role="alert">
                        Todo los campos son obligatorios
                    </div>';
    } else {
        $placa_carro = $_POST['placa_carro'];
        $propiedad_de = $_POST['propiedad_de'];
        $novedades = $_POST['novedades'];
        $estado = $_POST['estado'];
        $usuario_id = $_SESSION['idUser'];
        $query = mysqli_query($conexion, "SELECT * FROM carro where placa_carro = '$placa_carro'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                        El carro ya esta registrado
                    </div>';
        }else{
        

        $query_insert = mysqli_query($conexion, "INSERT INTO carro(placa_carro,propiedad_de,novedades,estado,usuario_id) values ('$placa_carro', '$propiedad_de', '$novedades', '$estado','$usuario_id')");
        if ($query_insert) {
            $alert = '<div class="alert alert-primary" role="alert">
                        Carro Registrado
                    </div>';
        } else {
            $alert = '<div class="alert alert-danger" role="alert">
                       Error al registrar carro
                    </div>';
        }
        }
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Registrar carro</b></h3>
     <a href="lista_carros.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Carros</p></a>
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
           <label for="placa_carro" style="color: #000000;">Placa carro: </label>
           <input type="text" placeholder="Ingrese la placa" name="placa_carro" id="placa_carro" class="form-control">
         </div>
          <div class="col-md-6 mb-3">
           <label style="color: #000000;">Propiedad de </label>
          
           <select id="propiedad_de" name="propiedad_de" class="form-control">

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
        </div>

        <div class="form-row">
          <div class="col-md-6 mb-3">
           <label for="novedades" style="color: #000000;">Novedades: </label>
           <input type="text" placeholder="Ingrese las novedades" name="novedades" id="novedades" class="form-control">
         </div>
          <div class="col-md-6 mb-3">
           <label style="color: #000000;">Estado </label>
          
           <select id="estado" name="estado" class="form-control">

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
<br>
               <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-save"></i> Guardar carro</button>
       </form> 
   </div>
</div>
</div>


<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>