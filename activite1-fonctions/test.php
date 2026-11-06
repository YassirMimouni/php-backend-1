<?php 
require_once __DIR__ . "/fonctions.php";
echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
try {
echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
echo "Erreur : " . $e->getMessage() . PHP_EOL;
}







?>