<?php
use App\Controllers\TrackController;
include_once "../common/cors.php";
require_once "TrackController.php";

$trackController = new TrackController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos enviados en el cuerpo de la petición
    $track = json_decode(file_get_contents("php://input"));

    // Guardar el track en la base de datos
    $saveSong = $trackController->guardarTrack($track);

    // Comprobar la operacion
    if ($saveSong) {
        echo json_encode(array('mensaje' => 'Track guardado exitosamente'));
    } else {
        echo json_encode(array('mensaje' => 'Error al guardar el track'));
    }
}
?>