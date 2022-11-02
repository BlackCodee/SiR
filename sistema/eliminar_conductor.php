<?php
if (!empty($_GET['id_con'])) {
    require("../conexion.php");
    $id_con = $_GET['id_con'];
    $query_delete = mysqli_query($conexion, "DELETE FROM conductor WHERE id_con = $id_con");
    mysqli_close($conexion);
    header("location: lista_conductor.php");
}
?>