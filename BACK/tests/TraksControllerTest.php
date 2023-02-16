<?php

use App\Controllers\TrackController;
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../vendor/autoload.php';

class TraksControllerTest extends TestCase{

    // function test_funcion_eliminar_trakc_ok(){
    // /**
    //  * CASO 1
    //  * Given - Dado el id_tracks(int) 
    //  * When - Cuando se elimine de manera correcta en la bd
    //  * Then - Entonces retorna un True
    // */
    // // Arrange : Escenario
    //     //instanciar clase
    //     $trackControler = new TrackController();
    //     $id_tracks = 0;
    //     $id_user = 18;
    //     $resultadoEsperado = true;
    // //Act : Ejecuto mi escenario de la caja negra llamo un método
    //     $resultadoReal =$trackControler->eliminarTrack($id_tracks);
    // //Assert : Comprobar /comparar el escenario
    //     $this->assertEquals($resultadoEsperado,$resultadoReal);
    // }

   
    
    
    // public function testObtenerTracks()
    // {
    //     // Preparar datos de prueba
    //     // ...

    //     // Ejecutar la función obtenerTracks()
    //     $resul = new TrackController();

    //     // Verificar que el resultado es el esperado
    //         $this->assertNotEmpty($resul);
    //         $this->assertIsArray($resul);
        
    //         // Verificar que cada track contiene los campos esperados
    //         foreach ($resul as $track) {
    //             $this->assertArrayHasKey('name_tracks', $track);
    //             $this->assertArrayHasKey('URL', $track);
    //             $this->assertArrayHasKey('artist', $track);
    //             $this->assertArrayHasKey('genre', $track);
    //             $this->assertArrayHasKey('created_at', $track);
    //             $this->assertArrayHasKey('foto', $track);
    //             $this->assertArrayHasKey('status', $track);
    //             $this->assertArrayHasKey('nombre', $track);
    //         }   
        
    // }
    
    public function testGuardarTrack() {
        $trackController = new TrackController;
        $track = new \stdClass();
        $track->name_tracks = "manolito";
        $track->URL = "https://mambo.com";
        $track->artist = "manolito";
        $track->genre = "Pop";
        $track->foto = "test.jpg";
        $track->status ="unPlayed";
        $track->user_id = " " ;

        
        $resultadoEsperado = true;
        //Act : Ejecuto mi escenario de la caja negra llamo un método
        $resultadoReal =$trackController->guardarTrack($track);
        //Assert : Comprobar /comparar el escenario
        $this->assertEquals($resultadoEsperado,$resultadoReal);
       
    }
    
}

?>