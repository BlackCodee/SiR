<?php
include_once "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nom_aux']) || empty($_POST['celular']) || empty($_POST['estado'])) {
        $alert = '<div class="alert alert-danger" role="alert">
                        Todo los campos son obligatorios
                    </div>';
    } else {
        $nom_aux = $_POST['nom_aux'];
        $celular = $_POST['celular'];
        $estado = $_POST['estado'];
        $usuario_id = $_SESSION['idUser'];
        $query = mysqli_query($conexion, "SELECT * FROM auxiliar where celular = '$celular'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                        El auxiliar ya esta registrado
                    </div>';
        }else{
        

        $query_insert = mysqli_query($conexion, "INSERT INTO auxiliar(nom_aux,celular,estado,usuario_id) values ('$nom_aux', '$celular', '$estado','$usuario_id')");
        if ($query_insert) {
            $alert = '<div class="alert alert-primary" role="alert">
                        Auxiliar Registrado
                    </div>';
        } else {
            $alert = '<div class="alert alert-danger" role="alert">
                       Error al registrar auxiliar
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
     <center><h3 class="h3 mb-0 text-gray-800"><b>Registrar auxiliar</b></h3>
     <a href="lista_auxiliar.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Auxiliares</p></a>
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
           <label for="nom_aux" style="color: #000000;">Auxiliar </label>
           <input type="text" placeholder="Ingrese el auxiliar" name="nom_aux" id="nom_aux" class="form-control">
         </div>
          <div class="col-md-6 mb-3">
           <label for="celular" style="color: #000000;">Celular </label>
           <input type="text" placeholder="Ingrese el celular" name="celular" id="celular" class="form-control">
         </div>
        </div>

        <div class="form-row">
         
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
         <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-save"></i> Guardar auxiliar</button>
               
                
       </form> 
   </div>
</div>
</div>


 <!-- /.container-fluid -->


<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>