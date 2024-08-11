<?php
include_once "conexion.php";
global $conexion;

$nombre= $_POST['NOM_PRO'];
$precio= $_POST['PRE_PRO'];
$marca = $_POST['MAR_PRO'];
$cantidad = $_POST['CANT_PRO'];
$id = $_GET['ID_PRO'];

// Ejecutar la consulta para eliminar el cliente
$consulta = "UPDATE productos SET NOM_pro='$nombre', PRE_PRO='$precio', MAR_PRO='$marca', CANT_PRO='$cantidad' WHERE ID_PRO='$id'";
$respuesta = $conexion->query($consulta);

// Verificar si la consulta fue exitosa
if($respuesta) {
    echo json_encode(array("success" => true, "message" => "Cliente modificado con éxito"));
} else {
    echo json_encode(array("success" => false, "errorMsg" => 'Error: ' . $conexion->error));
}

?>