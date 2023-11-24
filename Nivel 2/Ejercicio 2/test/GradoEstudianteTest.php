<?php
use PHPUnit\Framework\TestCase;
class GradoEstudianteTest extends TestCase{
    private $nota;
    public function setUp():void{
        $this->nota = new GradoEstudiante(0);
    }
    /**
     * @dataProvider datosParaVerificarGradoEstudiantes
     */
    public function testVerificarGradoEstudiante($nota, $resultadoEsperado) {
        $this->assertEquals($resultadoEsperado, $this->nota->comprobarGrado($nota)); 
    }
    /*IMPORTANTE el orden de variables ($nota, $resultadoEsperado) se debe mantener con las entradas del array*/
    public function datosParaVerificarGradoEstudiantes() {
        return [
            [65, "Primera División"],
            [58, "Segunda División"],
            [37, "Tercera División"],
            [26, "Reprobado"],

        ];
    }
}
?>