<?php
include_once "conexion.php";
global $conexion;
$nombre= $_POST['NOM_CLI'];
$apellido= $_POST['APE_CLI'];
$celular = $_POST['CEL_CLI'];
$edad = $_POST['EDAD_CLI'];
$sueldo = $_POST['SUE_CLI'];


$consulta = "INSERT INTO clientes (NOM_CLI, APE_CLI, CEL_CLI, EDAD_CLI, SUE_CLI) VALUES ('$nombre','$apellido', '$celular', '$edad', '$sueldo')";
$respuesta = $conexion->query($consulta);

if($respuesta == true){
    echo json_encode("se guardo");
} else {
    echo ('Error: '.mysqli_error($con));
}
?>