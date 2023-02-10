<?php

use App\Controllers\TrackController;
use PHPUnit\Framework\TestCase;

class TraksControllerTest extends TestCase{

    function test_funcion_eliminar_trakc_ok(){
    /**
     * CASO 1
     * Given - Dado el id_tracks(int) 
     * When - Cuando se elimine de manera correcta en la bd
     * Then - Entonces retorna un True
    */
    // Arrange : Escenario
        //instanciar clase
        $trackControler = new TrackController();
        $id_tracks = 2147483685;
        $resultadoEsperado = true;
    //Act : Ejecuto mi escenario de la caja negra llamo un método
        $resultadoReal =$trackControler->eliminarTrack($id_tracks);
    //Assert : Comprobar /comparar el escenario
        $this->assertEquals($resultadoEsperado,$resultadoReal);
    }
}

?>