<?php

use App\Controllers\UserController;
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../vendor/autoload.php';



class UserControllerTest extends TestCase{
    public function testGuardarUser() {

        $userContr = new UserController;
        $user = new \stdClass();
        $user->name = "pepita";
        //Act : Ejecuto mi escenario de la caja negra llamo un método
        $result =$userContr->saveName($user);
        //Assert : Comprobar /comparar el escenario
        $this->assertTrue($result);
    }
        
}      
// ?>