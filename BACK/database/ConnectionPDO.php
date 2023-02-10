<?php

namespace Database;
use Exception;
use Dotenv\Dotenv;
require_once ("vendor/autoload.php");


class ConnectionPDO
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        $this->make_connection();
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function make_connection()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $server = $_ENV["DB_SERVER"];
        $username = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];
        $database = $_ENV["DB_DATABASE"];
        var_dump($database);
        try {
            $connectionPDO = new \PDO("mysql:host=$server;dbname=$database", $username, $password);
            $setnames = $connectionPDO->prepare("SET NAMES 'utf8'"); 
            $setnames->execute();
        
            $this->connection = $connectionPDO;
            echo "La conexión ha sido exitosa";
        } catch (Exception $e) {
            echo "Ocurrió un error durante la conexión a la base de datos: " . $e->getMessage();
        }
    }

    public function obtenerConexion()
    {
        return $this->connection;
    }

}
// $conn = Connection::getInstance()->obtenerConexion();
// var_dump($conn);



?>