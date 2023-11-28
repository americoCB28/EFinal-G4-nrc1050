<?php
include("conexion2.php");

$id = $_POST['id'];
$precio = $_POST['Precio'];
$descripcion = $_POST['Descripcion'];
$nombre = $_POST['Nombre'];

$sql = /** @lang text */
    "UPDATE producto SET 
                          precioProducto = '".$precio."',
                          detallesProducto = '".$descripcion."',
                          nombreProducto = '".$nombre."' WHERE id = ".$id." ";

$resultado = mysqli_query($connection, $sql);
if ($resultado = $connection -> query($sql)) {
    header("location:../EFinal-G4-nrc1050/compra.php");
}
