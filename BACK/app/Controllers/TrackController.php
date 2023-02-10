<?php
namespace App\Controllers;
use Database\ConnectionPDO as Connection;


// class Track {
//     public $id_tracks;
//     public $name_tracks;
//     public $URL;
//     public $artist;
//     public $genre;
//     public $created_at;
//     public $foto;
//     public $nombre;
// }
class TrackController {
    
    function eliminarTrack($track)
    {
        $bd = Connection::getInstance()->obtenerConexion();
        //preparar query(consulta)sql para eliminar registro
        $sentencia = $bd->prepare("DELETE FROM tracks WHERE id_tracks = ?");
        //ejecutar el resultado de la query
        return $sentencia->execute([$track->id_tracks]);
    }

    function actualizarTrack($track)
    {
        $bd = Connection::getInstance()->obtenerConexion();
        $sentencia = $bd->prepare("UPDATE tracks SET name_tracks = ?, URL = ?, artist = ?, genre = ?, created_at = ?, foto = ? WHERE id_tracks = ?");
        return $sentencia->execute([$track->name_tracks, $track->URL, $track->artist, $track->genre, $track->created_at, $track->foto, $track->id_tracks]);
    }

    function obtenerTrackPorGenero()
    {
        $bd = Connection::getInstance()->obtenerConexion();
        $sentencia = $bd->query("SELECT genre FROM tracks");
        // $sentencia->execute([$track->genre]);
        return $sentencia->fetchObject();
    }

    function obtenerTracks()
    {
        $bd = Connection::getInstance()->obtenerConexion();
        $sentencia = $bd->query("SELECT name_tracks, URL, artist, genre, created_at, foto FROM tracks");
        return $sentencia->fetchAll();
    }    
    function guardarTrack($track)
    {
        $bd = Connection::getInstance()->obtenerConexion();
        // $sentencia = $bd->prepare("SELECT * FROM tracks WHERE URL = URL");

        $sentencia = $bd->prepare("INSERT INTO tracks(name_tracks, URL, artist, genre, foto) VALUES (?, ?, ?, ?, ?)");
        $result = $sentencia->execute([$track->name_tracks, $track->URL, $track->artist, $track->genre, $track->foto]);
        return $result;
            if ($resultado) {
            echo "La canción se ha guardado correctamente en la base de datos";
            } else {
            echo "Ha ocurrido un error al guardar la canción en la base de datos";
            }

    }
}
        //     //PROBANDO EL CRUD
        // obtener todas las traks
        // $funciones = new Fun();
        // $tracks = $funciones->obtenerTracks();
        // foreach ($tracks as $track) {
        //     $track = (object) $track;
        //     echo "Nombre de la canción: " . $track->name_tracks . "\n";
        //     echo "URL: " . $track->URL . "\n";
        //     echo "Artista: " . $track->artist . "\n";
        //     echo "Género: " . $track->genre . "\n";
        //     echo "Fecha de creación: " . $track->created_at . "\n";
        //     echo "Foto: " . $track->foto . "\n\n";
        // }

        // guardar nueva
        // $funciones = new Fun();
        // $track = new Track();
        // $track->name_tracks = "Manolo Garcia";
        // $track->URL = "https://www.pepiyo.com";
        // $track->artist = "pajaros de barro";
        // $track->genre = "Género de prueba";
        // $track->foto = "https://www.foto";

        // $resultado = $funciones->guardarTrack($track);

        // if ($resultado) {
        //     echo "La canción se ha guardado correctamente en la base de datos";
        // } else {
        //     echo "Ha ocurrido un error al guardar la canción en la base de datos";
        // }

        // Actualizar cambios
        // $funciones = new Fun();
        // $track->id_tracks = 2147483686;
        // $track->name_tracks = "pepe garcia";
        // $track->URL = "https://www.pepiyo.com";
        // $track->artist = "pajaros de barro";
        // $track->genre = "pop";
        // $track->foto = "https://www.foto";


        // $resultado = $funciones->actualizarTrack($track);

        // if ($resultado) {
        //     echo "La canción se ha actualizado correctamente en la base de datos";
        // } else {
        //     echo "Ha ocurrido un error al actualizar la canción en la base de datos";
        // }

    //BUSCAR POR GENERO
    // $funciones = new Fun();
    // $tracks = $funciones->obtenerTrackPorGenero();
    // foreach ($tracks as $genre) {
    //     $track = (object) $track;
    //     echo "Género: " . $track->genre . "\n";


    // }
    //borrar cancion
    // $funciones = new Fun();
    // $track->id_tracks = 2147483685;
    // $resultado = $funciones->eliminarTrack($track);