<?php
declare(strict_types=1);
function additionner(float $a, float $b): float
{
return $a + $b;
}
function diviser(float $a, float $b): float
{
if ($b == 0){
    throw new InvalidArgumentException("Division par zéro impossible");

}
return $a / $b;
}

?>