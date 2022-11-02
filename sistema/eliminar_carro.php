<?php
if (!empty($_GET['id_carro'])) {
    require("../conexion.php");
    $id_carro = $_GET['id_carro'];
    $query_delete = mysqli_query($conexion, "DELETE FROM carro WHERE id_carro = $id_carro");
    mysqli_close($conexion);
    header("location: lista_carros.php");
}
?>