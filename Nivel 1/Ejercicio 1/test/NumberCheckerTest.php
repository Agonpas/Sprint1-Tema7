<?php
use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase {
    private $number;
    public function setUp(): void {
        $this->number = new NumberChecker(4);
    }
    public function testEsNumeroPar() {
        $this -> assertEquals(true, $this->number->isEven());
    }
    public function testEsNumeroPositivo() {
        $this -> assertEquals(true, $this->number->isPositive());
    }
}
?>