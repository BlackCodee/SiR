<?php include_once "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']) || empty($_POST['estado'])) {
        $alert = '<div class="alert alert-primary" role="alert">
                    Todo los campos son obligatorios
                </div>';
    } else {

        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $user = $_POST['usuario'];
        $clave = md5($_POST['clave']);
        $rol = $_POST['rol'];
        $estado = $_POST['estado'];

        $query = mysqli_query($conexion, "SELECT * FROM usuario where correo = '$email'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                        El correo ya existe
                    </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO usuario(nombre,correo,usuario,clave,rol,estado) values ('$nombre', '$email', '$user', '$clave', '$rol', '$estado')");
            if ($query_insert) {
                $alert = '<div class="alert alert-primary" role="alert">
                            Usuario registrado
                        </div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
                        Error al registrar
                    </div>';
            }
        }
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    
    <div class="contenido">
            <div>
    <br>
     <center><h3 class="h3 mb-0 text-gray-800"><b>Crear usuario</b></h3>
     <a href="lista_usuarios.php" style="text-decoration:none"><p style="color: #B9011D;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Usuarios</p></a>
     </center>
     
   </div>
<br>
    <!-- Content Row -->
    <div class="container">
    <div class="row">
        <div class="col-lg-12 ml-2">
            <form action="" method="post" autocomplete="off">
                <?php echo isset($alert) ? $alert : ''; ?>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="nombre" style="color: #000000;">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre" id="nombre">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="correo" style="color: #000000;">Correo</label>
                    <input type="email" class="form-control" placeholder="Ingrese Correo Electrónico" name="correo" id="correo">
                </div>
              </div>

               <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="usuario" style="color: #000000;">Usuario</label>
                    <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario" id="usuario">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="clave" style="color: #000000;">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="clave" id="clave">
                </div>
              </div>
                
            <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label style="color: #000000;">Rol</label>
                    <select name="rol" id="rol" class="form-control">
                        <?php
                        $query_rol = mysqli_query($conexion, " select * from rol");
                        $resultado_rol = mysqli_num_rows($query_rol);
                        if ($resultado_rol > 0) {
                            while ($rol = mysqli_fetch_array($query_rol)) {
                        ?>
                                <option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
                        <?php

                            }
                        }

                        ?>
                    </select>
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
                <button type="submit" class="btn text-white" style="background-color: #000000;"><i class="fas fa-save"></i> Guardar usuario</button>
                 
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>