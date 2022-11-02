<?php
include "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['rol']) ||empty($_POST['estado'])) {
    $alert = '<p class"error">Todo los campos son requeridos</p>';
  } else {
    $idusuario = $_GET['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];

    $sql_update = mysqli_query($conexion, "UPDATE usuario SET nombre = '$nombre', correo = '$correo' , usuario = '$usuario', rol = $rol, estado = '$estado' WHERE idusuario = $idusuario");
    $alert = '<div class="alert alert-primary" role="alert">
                            Usuario actualizado
                        </div>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['id'])) {
  header("Location: lista_usuarios.php");
}
$idusuario = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM usuario WHERE idusuario = $idusuario");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_usuarios.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $idcliente = $data['idusuario'];
    $nombre = $data['nombre'];
    $correo = $data['correo'];
    $usuario = $data['usuario'];
    $rol = $data['rol'];
    $estado = $data['estado'];
  }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Ajustar usuario</b></h3>
     <a href="lista_usuarios.php" style="text-decoration:none"><p style="color: #B9011D;" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Usuarios</p></a>
     </center>
     
   </div>
<br>
  <div class="row">
    <div class="col-lg-6 m-auto">
      <form class="" action="" method="post">
        <?php echo isset($alert) ? $alert : ''; ?>
        <input type="hidden" name="id" value="<?php echo $idusuario; ?>">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>">

        </div>
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="text" placeholder="Ingrese correo" class="form-control" name="correo" id="correo" value="<?php echo $correo; ?>">

        </div>
        <div class="form-group">
          <label for="usuario">Usuario</label>
          <input type="text" placeholder="Ingrese usuario" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario; ?>">

        </div>
        <div class="form-group">
          <label for="rol">Rol</label>
          <select name="rol" id="rol" class="form-control">
            <option value="1" <?php
                              if ($rol == 1) {
                                echo "selected";
                              }
                              ?>>Administrador</option>
            <option value="2" <?php
                              if ($rol == 2) {
                                echo "selected";
                              }
                              ?>>Empleado</option>
            
          </select>
        </div>
        <div class="form-group">
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
        <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-user-edit"></i> Editar Usuario</button>
      </form>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>