<?php
include "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nom_con']) || empty($_POST['celular']) || empty($_POST['estado'])) {
    $alert = '<div class="alert alert-danger" role="alert">
                Todo los campos son obligatorios
              </div>';
  } else {
      $id_con = $_GET['id_con'];
      $nom_con = $_POST['nom_con'];
      $celular = $_POST['celular'];
      $estado = $_POST['estado'];

 $sql_update = mysqli_query($conexion, "UPDATE conductor SET nom_con = '$nom_con', celular = '$celular', estado = '$estado' WHERE id_con = $id_con");
    $alert = '<div class="alert alert-primary" role="alert">
                            Conductor actualizado
                        </div>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['id_con'])) {
  header("Location: lista_conductor.php");
}
$id_con = $_REQUEST['id_con'];
$sql = mysqli_query($conexion, "SELECT * FROM conductor WHERE id_con = $id_con");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_conductor.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id_con = $data['id_con'];
    $nom_con = $data['nom_con'];
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
     <center><h3 class="h3 mb-0 text-gray-800"><b>Ajustar Conductor</b></h3>
     <a href="lista_conductor.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Conductores</p></a>
     </center>
     
   </div>
<br>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 ml-2">
       <form action="" method="post" autocomplete="off">
         <?php echo isset($alert) ? $alert : ''; ?>
       
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="nom_con">Nombre </label>
              <input type="text" placeholder="Ingrese el nombre" class="form-control" name="nom_con" id="nom_con" value="<?php echo $nom_con; ?>">
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
        <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-user-edit"></i> Editar conductor</button>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>