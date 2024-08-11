<?php
include_once 'Conexion.php';

function obtenerClientes() {
    global $conexion;

    $consulta = "SELECT * FROM productos";
    $puente = $conexion->query($consulta);
    $resultado = array();

    if ($puente->num_rows > 0) {
        while ($fila = $puente->fetch_assoc()) {
            $resultado[] = $fila; // Agregar cada fila al array de resultados
        }
    } else {
        return ["mensaje" => "No hay datos"];
    }

    // Retornar el array de resultados
    return $resultado;
}
echo json_encode(obtenerClientes());

?>
