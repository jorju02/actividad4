<?php
/*
 *Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima. 
 */

$num=array(rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99));

echo "El numero mas pequeño es ".min($num);