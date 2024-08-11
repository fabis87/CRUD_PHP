<?php
include_once "conexion.php";
global $conexion;
$nombre= $_POST['NOM_PRO'];
$precio= $_POST['PRE_PRO'];
$marca = $_POST['MAR_PRO'];
$cantidad = $_POST['CANT_PRO'];


$consulta = "INSERT INTO productos (NOM_PRO, PRE_PRO, MAR_PRO, CANT_PRO) VALUES ('$nombre','$precio', '$marca', '$cantidad')";
$respuesta = $conexion->query($consulta);

if($respuesta == true){
    echo json_encode("se guardo");
} else {
    echo ('Error: '.mysqli_error($con));
}
?>