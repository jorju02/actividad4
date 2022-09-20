<?php
/*
 *En este programa tendrás que utilizar un array asociativo para guardar como key cada día de la semana y
 * asociar a cada día un valor entero. Se trandrá que mostrar en  pantalla cada día y 
 * valor almacenado en el array así como la suma y media de todos los valores guadados en el array.
 */

$semana=array("lunes"=>40,"martes"=>19,"miercoles"=>71,"jueves"=>30,"viernes"=>9,"sabado"=>7,"domingo"=>36);

foreach ($semana as $item => $value){
    echo $item.": ".$value . "<br>";
}

echo "<br>";
echo "La media es ".(array_sum($semana) / count($semana));
echo "<br>";
echo "La suma es  ".array_sum($semana);