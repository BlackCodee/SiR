<?php
include_once "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['ciudad']) || empty($_POST['estado'])) {
        $alert = '<div class="alert alert-danger" role="alert">
                        Todo los campos son obligatorios
                    </div>';
    } else {
        $ciudad = $_POST['ciudad'];
        $estado = $_POST['estado'];
        $query = mysqli_query($conexion, "SELECT * FROM ciudad_origen where ciudad = '$ciudad'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                        La ciudad ya esta registrado
                    </div>';
        }else{
        

        $query_insert = mysqli_query($conexion, "INSERT INTO ciudad_origen(ciudad,estado) values ('$ciudad', '$estado')");
        if ($query_insert) {
            $alert = '<div class="alert alert-primary" role="alert">
                        Ciudad Registrada
                    </div>';
        } else {
            $alert = '<div class="alert alert-danger" role="alert">
                       Error al registrar ciudad
                    </div>';
        }
        }
    }
}
mysqli_close($conexion);
?>

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    
   <div class="container-fluid">
    <!-- Page Heading -->
    
    <div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Crear ciudad</b></h3>
     <a href="lista_ciudad.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Ciudades</p></a>
     </center>
     
   </div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 ml-2">
                <form action="" autocomplete="off" method="post" class="card-body p-2">
                    <?php echo isset($alert) ? $alert : ''; ?>
            <div class="form-row">
                  <div class="col-md-6 mb-3">
                        <label for="nombre">Ciudad</label>
                        <input type="text" placeholder="Ingrese la ciudad" name="ciudad" id="ciudad" class="form-control">
                    </div>
                   <div class="col-md-6 mb-3">
                 <label>Estado </label>
          
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
                    <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-save"></i> Guardar ciudad</button>
                   
                </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->





</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>