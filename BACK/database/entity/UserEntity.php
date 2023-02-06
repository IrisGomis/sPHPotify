<?php
namespace Database\Entity\Users;

use Database\Connection\ConnectionPDO;
require_once("../../vendor/autoload.php") ;


class User {
    public $id_user;
    public $user_name;

    public function __construct($id_user, $user_name) {
        $this->$id_user = $id_user;
        $this->user_name = $user_name;
    }
    public function createUser()
    {
        $conn = new ConnectionPDO;
        $conn = $conn->connect();

        $query = "INSERT INTO usuarios (user_id, name) VALUES (:id_user, :user_name)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':user_name', $this->user_name);

        $stmt->execute();
    }
    
} 
//probar si funciona metiendo una usuaria nueva
//silenciar o descomentar para ver si funciona

// $uniqueId = uniqid();

// $user = new User($uniqueId, 'Adriana');
// $user->createUser();//traer todo lo que contiene create user
// echo "El usuario con nombre " . $user->user_name . " ha sido creado correctamente.";

?>