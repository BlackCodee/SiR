<?php
if (!empty($_GET['cod'])) {
    require("../conexion.php");
    $cod = $_GET['cod'];
    $query_delete = mysqli_query($conexion, "DELETE FROM ciudad_origen WHERE cod = $cod");
    mysqli_close($conexion);
    header("location: lista_ciudad.php");
}
?>