<?php
include ('GradoEstudiante.php');
$estudiante1 = new GradoEstudiante(0);
echo $estudiante1 ->comprobarGrado(65);
$estudiante2 = new GradoEstudiante(0);
echo $estudiante2 ->comprobarGrado(58);
$estudiante3 = new GradoEstudiante(0);
echo $estudiante3 ->comprobarGrado(37);
$estudiante4 = new GradoEstudiante(0);
echo $estudiante4 ->comprobarGrado(26);
?>