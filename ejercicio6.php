<?php
/*
 * Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la media.
 */

$num=array(rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99));

echo "La media es ".(array_sum($num) / count($num));