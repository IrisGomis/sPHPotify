<?php

namespace Database\Connection;

require_once("../../vendor/autoload.php") ;
class ConnectionPDO {

public $host = "localhost";
public $username = "root";
public $password = "090181";
public $dbname = "sphpotify";


public function connect() {

        try {
            $conn = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }  
}
$conn = new ConnectionPDO();
$db = $conn->connect();

if ($db !== null) {
  $query = "SELECT * FROM tracks";

  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

  var_dump($result);
}
?>




