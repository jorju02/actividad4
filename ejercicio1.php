<?php
/*
 *Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
nombre, apellido y DNI.
Hay que meter todos los datos en dos arrays ($usuario1, $usuario2) y después visualizarlos por pantalla en formato tabla. 
 */

$nombre1="Juan";
$nombre2="Maria";
$apellido1="Martinez";
$apellido2="Fernandez";
$dni1="11111111A";
$dni2="22222222B";

$usuario1=array($nombre1,$apellido1,$dni1);
$usuario2=array($nombre2,$apellido2,$dni2);

for ($i = 0; $i < count($usuario1); $i++) {
    echo $usuario1[$i];
    echo ",";
}
echo "<br>";
for ($i = 0; $i < count($usuario2); $i++) {
    echo $usuario2[$i];
    echo ",";
}