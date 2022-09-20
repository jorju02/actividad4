<?php
/*
 *En una zapatería sólo se venden 5 productos. Tengo los productos y los precios guardados en 2 arrays 
 *(en uno los productos y en otro los precios).
 * Hay que visualizar cada producto con su precio. 
 */

$zapatos=array("uno","dos","tres","cuatro","cinco");
$precios=array(100,150,65,24,210);

for ($i = 0; $i < count($zapatos); $i++) {
    echo $zapatos[$i]."   >>>  ".$precios[$i]."€";
    echo "<br>";
}

