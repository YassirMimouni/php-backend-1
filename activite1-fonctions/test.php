<?php 
require_once __DIR__ . "/fonctions.php";
echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
try {
echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
echo "Erreur : " . $e->getMessage() . PHP_EOL;
}

echo "7 est pair ? " . (estPair(7) ? "oui" : "non") . PHP_EOL;
echo "3 est positive ? ". (estPositif(3)?"oui" : "non") . PHP_EOL;
echo "9,50,12 Le plus grand est ? ". (maximum(9,50,12)) . PHP_EOL;
echo "16 est premier ? ". (estPremier(16)?"oui": "non") . PHP_EOL;





?>