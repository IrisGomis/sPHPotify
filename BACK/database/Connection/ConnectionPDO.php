<?php

namespace Database\Connection;

require_once("../../vendor/autoload.php") ;
class ConnectionPDO {

public $host = "localhost";
public $username = "root";
public $password = "090181";
public $dbname = "sphpotify";


//ver si funciona
// try {
//     $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
//     // Establecer el modo de error para que se lance una excepción
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Conexión realizada con éxito";
//     } catch(PDOException $e) {
//         echo "Error de conexión: " . $e->getMessage();
//     }
//     $conn = null;
public function connect() {

        try {
            $conn = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = "SELECT * FROM tracks";

            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            var_dump($result);
        } catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;

    }  
}
$NYconn = new ConnectionPDO;
$NYconn->connect();
?>




