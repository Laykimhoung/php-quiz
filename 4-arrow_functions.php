<?php
declare(strict_types=1);

$taxRate = 0.10;
$applyTax = fn(float $price): float => $price + ($price * $taxRate);

$bonus = 5.0;
$addBonus = fn(float $score): float => min(100.0, $score + $bonus);

$prices = [10.0, 50.0, 100.0];
$finalPrices = array_map($applyTax, $prices);

$scores = [78.0, 88.5, 96.0];
$curvedScores = array_map($addBonus, $scores);

echo "Single Price with Tax: $" . $applyTax(200.0) . "<br>";

echo "Prices after 10% tax: ";
print_r($finalPrices);
echo "<br>";

echo "Scores with bonus: ";
print_r($curvedScores);
echo "<br>";
?>