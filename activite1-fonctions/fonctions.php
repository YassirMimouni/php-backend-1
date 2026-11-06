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
function estPair(int $n): bool
{
    if (($n % 2) == 0){
        return true;
    }
    else {
        return false;
    }
}
function estPositif(float $n): bool{
    if($n < 0){
        return false;
    }
    else{
        return true;
    }
}
function maximum(float $a, float $b, float $c): float{
    if($c < $b && $a < $b){
        return $b;
    }
    elseif($b < $c && $a < $c){
        return $c;
    }
    else{
        return $a;
    }


}
function estPremier(int $n): bool {

    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= floor(sqrt($n)); $i++) {

        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
function calculerTTC(float $ht, float $tva = 20.0): float {
    return $ht * (1 + $tva / 100);
}

function calculerRemise(float $prix, float $pourcentage): float {
    $remise = $prix * $pourcentage / 100;
    $prixFinal = $prix - $remise;

    return round($prixFinal, 2);
}

function calculerFacture(
    float $prixUnitaire,
    int $quantite,
    float $remise = 0,
    float $tva = 20.0
): float {

    $totalHT = $prixUnitaire * $quantite;

    $totalApresRemise = calculerRemise($totalHT, $remise);

    $totalTTC = calculerTTC($totalApresRemise, $tva);

    return round($totalTTC, 2);
}
?>