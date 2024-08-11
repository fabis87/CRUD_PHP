<?php
include_once "conexion.php";
global $conexion;

$nombre= $_POST['NOM_CLI'];
$apellido= $_POST['APE_CLI'];
$celular = $_POST['CEL_CLI'];
$edad = $_POST['EDAD_CLI'];
$sueldo = $_POST['SUE_CLI'];
$id = $_GET['ID_CLI'];

// Ejecutar la consulta para eliminar el cliente
$consulta = "UPDATE clientes SET NOM_CLI='$nombre', APE_CLI='$apellido', CEL_CLI='$celular', EDAD_CLI='$edad', 
SUE_CLI='$sueldo' WHERE ID_CLI='$id'";
$respuesta = $conexion->query($consulta);

// Verificar si la consulta fue exitosa
if($respuesta) {
    echo json_encode(array("success" => true, "message" => "Cliente modificado con éxito"));
} else {
    echo json_encode(array("success" => false, "errorMsg" => 'Error: ' . $conexion->error));
}

?>