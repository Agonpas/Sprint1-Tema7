<?php
use PHPUnit\Framework\TestCase;
class GradoEstudianteTest extends TestCase{
    private $nota;
    public function setUp():void{
        $this->nota = new GradoEstudiante(0);
    }
    public function testVerificarGradoEstudiante() {
        $this->assertEquals("Primera División", $this->nota->comprobarGrado(65));
        $this->assertEquals("Segunda División", $this->nota->comprobarGrado(58));
        $this->assertEquals("Tercera División", $this->nota->comprobarGrado(37));
        $this->assertEquals("Reptobado", $this->nota->comprobarGrado(26));
        
    }
}
?>