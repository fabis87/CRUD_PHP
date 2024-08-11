<?php
include_once "conexion.php";
global $conexion;

$id = $_POST['ID_CLI'];

// Ejecutar la consulta para eliminar el cliente
$consulta = "DELETE FROM clientes WHERE ID_CLI='$id'";
$respuesta = $conexion->query($consulta);

// Verificar si la consulta fue exitosa
if($respuesta) {
    echo json_encode(array("success" => true, "message" => "Cliente eliminado con éxito"));
} else {
    echo json_encode(array("success" => false, "errorMsg" => 'Error: ' . $conexion->error));
}
?>