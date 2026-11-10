<?php
declare(strict_types=1);

function formatTitle(string $title): string {
    return "*** " . strtoupper(trim($title)) . " ***";
}

function calculateGrade(float $score): string {
    if ($score >= 85) return "A";
    if ($score >= 70) return "B";
    if ($score >= 50) return "C";
    return "F";
}

function formatCurrency(float $amount): string {
    return "$" . number_format($amount, 2);
}
?>