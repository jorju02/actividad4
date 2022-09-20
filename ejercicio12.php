<?php
/*
 * Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de utilizar las funciones ksort y natsort.
 */
$a = array(
    "jordi" => "Jordi Rubio",
    "marta" => "Marta Fabra",
    "eva" => "Eva Palacio",
    "toni" => "Antonio Comas",
    "emilio" => "Emilio Morales",
    "fco" => "Francisco Cascales"
);

echo "Mostrar array" . "<br>";

foreach ($a as $item => $value) {
    echo $item . ": " . $value . "<br>";
}

echo "<br>";
echo "<br>";

ksort($a);

echo "Ordenar por la clave" . "<br>";

foreach ($a as $item => $value) {
    echo $item . ": " . $value . "<br>";
}
echo "<br>";
echo "<br>";
natsort($a);

echo "Ordenar por el valor" . "<br>";

foreach ($a as $item => $value) {
    echo $item . ": " . $value . "<br>";
}
