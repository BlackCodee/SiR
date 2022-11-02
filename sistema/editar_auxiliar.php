<?php
include "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nom_aux']) || empty($_POST['celular']) || empty($_POST['estado'])) {
    $alert = '<div class="alert alert-danger" role="alert">
                Todo los campos son obligatorios
              </div>';
  } else {
      $id_aux = $_GET['id_aux'];
      $nom_aux = $_POST['nom_aux'];
      $celular = $_POST['celular'];
      $estado = $_POST['estado'];

 $sql_update = mysqli_query($conexion, "UPDATE auxiliar SET nom_aux = '$nom_aux', celular = '$celular', estado = '$estado' WHERE id_aux = $id_aux");
    $alert = '<div class="alert alert-primary" role="alert">
                            Auxiliar actualizado
                        </div>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['id_aux'])) {
  header("Location: lista_auxiliar.php");
}
$id_aux = $_REQUEST['id_aux'];
$sql = mysqli_query($conexion, "SELECT * FROM auxiliar WHERE id_aux = $id_aux");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_auxiliar.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id_aux = $data['id_aux'];
    $nom_aux = $data['nom_aux'];
    $celular = $data['celular'];
    $estado = $data['estado'];
  }
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Ajustar auxiliar</b></h3>
     <a href="lista_auxiliar.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Auxiliar</p></a>
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
              <label for="nom_aux">Nombre </label>
              <input type="text" placeholder="Ingrese el nombre" class="form-control" name="nom_aux" id="nom_aux" value="<?php echo $nom_aux; ?>">
            </div>
            <div class="col-md-6 mb-3">
              <label for="celular">Celular </label>
              <input type="text" placeholder="Ingrese el celular" class="form-control" name="celular" id="celular" value="<?php echo $celular; ?>">
            </div>
        </div>
   
        <div class="form-row">
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
        <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-user-edit"></i> Editar Auxiliar</button>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>