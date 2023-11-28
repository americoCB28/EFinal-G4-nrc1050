<?php
include("conexion2.php");

$id = $_GET['id'];

$sql = /** @lang text */
    "DELETE FROM producto WHERE id = '$id'";

$query = mysqli_query($connection, $sql);
if ($query) {
    header("location:../EFinal-G4-nrc1050/compra.php");
} else {
    echo "Datos no insertados";
}
