<?php

namespace App\Controllers;
use Database\ConnectionPDO as Connection;
// use App\Controllers\UserController\saveName;
include_once "UserController.php";

class TrackController {
    
    function eliminarTrack($track)
    {
        $bd = Connection::getInstance()->obtenerConexion();
        //preparar query(consulta)sql para eliminar registro
        $sentencia = $bd->prepare("DELETE tracks, usuarios FROM tracks INNER JOIN usuarios ON tracks.id_user = usuarios.id_user WHERE tracks.id_tracks = ?");
        //ejecutar el resultado de la query
        return $sentencia->execute([$track->id_tracks, $track->id_user]);
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
        $sentencia = $bd->query("SELECT DISTINCT genre FROM tracks");
        // $sentencia->execute([$track->genre]);
        return $sentencia->fetchAll();
    }

    function obtenerTracks()
    {
        $bd = Connection::getInstance()->obtenerConexion();
        $sentencia = $bd->query("SELECT name_tracks, URL, artist, genre, created_at, foto FROM tracks");
        return $sentencia->fetchAll();
    }    
   
    function guardarTrack($track)
    {
        try {
            $bd = Connection::getInstance()->obtenerConexion();
            $bd->beginTransaction();

            $stmt = $bd->prepare("SELECT COUNT(*) as count FROM tracks WHERE URL = ?");
            $stmt->execute([$track->URL]);
            $result = $stmt->fetch($bd::FETCH_ASSOC);
            if ($result['count'] > 0) {
                throw new \Exception("La URL ya existe en la base de datos");
            }
        
            // Insertar nombre de usuario
            $sentencia = $bd->prepare("INSERT INTO usuarios (name) VALUES (?)");
            $sentencia->execute([$track->name]);

            // Obtener el ID del usuario insertado
            $user_id = $bd->lastInsertId();

            $sentencia2 = $bd->prepare("INSERT INTO tracks (name_tracks, URL, artist, genre, foto, status, user_id ) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $sentencia2->execute([$track->name_tracks, $track->URL, $track->artist, $track->genre, $track->foto, $track->status, $user_id]);

            $bd->commit();
        
            // Retornar valor indicando que la operación de inserción fue exitosa
            return true;
        } catch (\Exception $ex) {
            // En caso de error, deshacer transacción y retornar valor indicando que la operación falló
            $bd->rollBack();
            return false;
            
        }
        
    }
    
}

?>           
   