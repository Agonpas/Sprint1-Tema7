<?php
class GradoEstudiante{
    
    public function __construct(private int $nota){
    }
    public function comprobarGrado($nota):string {
        if ($nota >= 60) {
            return "Primera División";
        } elseif ($nota >= 45) {
            return "Segunda División";
        } elseif ($nota >= 33) {
            return "Tercera División";
        } else {
            return "Reprobado";
        }
    }
}
?>