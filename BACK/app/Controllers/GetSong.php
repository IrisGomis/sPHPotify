<?php

use App\Controllers\TrackController;
include_once "../common/cors.php";
require_once "TrackController.php";

$trackController = new TrackController;
$obtener = $trackController->obtenerTracks();

if ($obtener) {
    echo json_encode($obtener);
} else {
    echo json_encode(array('mensaje' => 'No se encontraron tracks'));
}

?>