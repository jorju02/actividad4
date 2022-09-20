<?php
/*
 *Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
nombre, apellido y DNI.
Hay que meter todos los datos en un array asociativo donde los índices sean “nombre”, “apellido”, “DNI” y después
visualizarlos por pantalla en formato tabla.
 */

$nombre1="Juan";
$nombre2="Maria";
$apellido1="Martinez";
$apellido2="Fernandez";
$dni1="11111111A";
$dni2="22222222B";

$usuario1=array("nombre"=>$nombre1,"apellido"=>$apellido1,"dni"=>$dni1);
$usuario2=array("nombre"=>$nombre2,"apellido"=>$apellido2,"dni"=>$dni2);

foreach ($usuario1 as $item => $value){
    echo $item.": ".$value . "<br>";
}

echo "<br>";

foreach ($usuario2 as $item => $value){
    echo $item.": ".$value . "<br>";
}