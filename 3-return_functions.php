<?php
declare(strict_types=1);

function getSystemVersion(): string {
    return "PHP 8.2 Web App v1.0";
}

function calculateAverage(float $score1, float $score2, float $score3): float {
    return ($score1 + $score2 + $score3) / 3;
}

function calculateTotal(float $price, int $quantity, float $taxRate = 0.10): float {
    $subtotal = $price * $quantity;
    return $subtotal + ($subtotal * $taxRate);
}

$version = getSystemVersion();
$average = calculateAverage(80.5, 90.0, 85.5);
$total = calculateTotal(25.0, 3);

echo "System: " . $version . "<br>";
echo "Average Score: " . round($average, 2) . "<br>";
echo "Total with 10% Tax: $" . number_format($total, 2) . "<br>";
?>