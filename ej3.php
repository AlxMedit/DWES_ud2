<?php
/**
* @author Alejandro V. Abad
* @date 25/09/23
* @utility Activity 3
* @category Class exercises
*/

$radius = 50;
define ("pi", 3.14);
$longitudCircunferencia = 2 * pi * $radius;
$areaCirculo = pi * pow($radius, 2);
echo "Valor del radio: $radius<br>";
echo "Longitud de la circunferencia: $longitudCircunferencia<br>";
echo "Área del círculo: $areaCirculo<br>";

echo '<svg width="200" height="200">';
echo '<circle cx="100" cy="100" r="' . $radius . '" stroke="black" stroke-width="2" fill="none" />';
echo '</svg>';