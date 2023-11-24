<?php
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase {
    
    private $number;
    public function setUp(): void {
        $this->number = new NumberChecker(4);
    }
    /**
     * @dataProvider datosParaEsNumeroPar
     */
    public function testEsNumeroPar($number, $resultadoEsperado) {
        $numberCheck = new NumberChecker($number);
        $this -> assertEquals($resultadoEsperado, $numberCheck->isEven());
    }
    /*La notación que sigue es como referenciamos a la función con los datos para las pruebas correspondietes*/
    /**
     * @dataProvider datosParaEsNumeroPositivo
     */
    public function testEsNumeroPositivo($number, $resultadoEsperado) {
        $numberCheck = new NumberChecker($number);
        $this -> assertEquals($resultadoEsperado, $numberCheck->isPositive());
    }
    public function datosParaEsNumeroPar() {
        /*dentro de la función ponemos un array que contiene otros arrays 1 por cada prueba*/
        return [
            [5, false],
            [7, false],
            [0, true],
            [-2, true],   
        ];
    }
    public function datosParaEsNumeroPositivo() {
        /*dentro de la función ponemos un array que contiene otros arrays 1 por cada prueba*/
        return [
            [4, true],
            [0, false], 
            [-2, false],
            [10, true],  
        ];
    }
}
?>