<?php
if (!empty($_GET['id_recogida'])) {
    require("../conexion.php");
    $id_recogida = $_GET['id_recogida'];
    $query_delete = mysqli_query($conexion, "DELETE FROM recogidas WHERE id_recogida = $id_recogida");
    mysqli_close($conexion);
    header("location: lista_servicios.php");
}
?>