<?php
if (!empty($_GET['id_aux'])) {
    require("../conexion.php");
    $id_aux = $_GET['id_aux'];
    $query_delete = mysqli_query($conexion, "DELETE FROM auxiliar WHERE id_aux = $id_aux");
    mysqli_close($conexion);
    header("location: lista_auxiliar.php");
}
?>