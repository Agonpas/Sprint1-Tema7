<?php
include ('NumberChecker.php');
$prueba = new NumberChecker(0);
if ($prueba->isEven()) {
    echo "es par" . PHP_EOL;
} else {
    echo "es impar" . PHP_EOL;
}
if ($prueba->isPositive()) {
    echo "es positivo" . PHP_EOL;
} else {
    echo "es negativo" . PHP_EOL;
}

?>