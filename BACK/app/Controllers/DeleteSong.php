<?php 
use App\Controllers\TrackController;
include_once "../common/cors.php";
require_once "TrackController.php";

$track = json_decode(file_get_contents("php://input"));
$trackController = new TrackController;
$deleteSong = $trackController->eliminarTrack($track);
echo json_encode($deleteSong);
?>
