<?php
namespace Database\Entity\Traks;

use Database\Connection\ConnectionPDO;
require_once("../../vendor/autoload.php") ;


class Track {
    public $id_track;
    public $name_tracks;
    public $url;
    public $artist;
    public $genre;
    public $fecha;
    public $foto;



    public function __construct ($id_track, $name_tracks, $url, $artist, $genre, $fecha, $foto) {

        $this->id_track= $id_track;
        $this->name_tracks = $name_tracks;
        $this->url = $url;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->fecha = $fecha;
        $this->foto = $foto;
    }
    public function createTrack()
    {
        $conn = new ConnectionPDO;
        $conn = $conn->connect();
        //VERIFICAR SI LA CANCION YA SE ENCUENTRA EN LA BASE DE DATOS
        $query = "SELECT * FROM tracks WHERE name_tracks = :nametracks AND URL = :url ";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nametracks', $this->name_tracks);
        $stmt->bindParam(':url', $this->url);
        $stmt->execute();

         // Si la canción ya existe, no la agregues
        if ($stmt->rowCount() > 0) {
            echo "La canción " . $this->name_tracks . " ya existe en la base de datos.";
            return;
        }

        //SI LA CANCION NO EXISTE AGREGALA
        $query = "INSERT INTO tracks (id_tracks, name_tracks, URL, artist,  genre, created_at, foto) 
                    VALUES (:id_track, :name_tracks, :url, :artist, :genre, :fecha, :foto)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_track', $this->id_track);
        $stmt->bindParam(':name_tracks', $this->name_tracks);
        $stmt->bindParam(':url', $this->url);
        $stmt->bindParam(':artist', $this->artist);
        $stmt->bindParam(':genre', $this->genre);
        $stmt->bindParam(':fecha', $this->fecha);
        $stmt->bindParam(':foto', $this->foto);

        $stmt->execute();
    } 
         
}

//probar si funciona metiendo una cancion nueva
//silenciar o descomentar para ver si funciona

// $uniqueId = uniqid();
// $track = new Track($uniqueId, 'Track 5', 'www.track1.com', 'Artist 5', 'Pop', ' ', 'www.track5.jpg');
// $track->createTrack();//traer todo lo que contiene create traks
// echo "El track con nombre " . $track->name_tracks . " ha sido creado correctamente.";



?>
