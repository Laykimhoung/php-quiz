<?php
$text = "angkor university";
$fruits = ["Apple", "Banana"];

$length = strlen($text);
$upper = strtoupper($text);
$lower = strtolower($upper);

array_push($fruits, "Orange");
$count = count($fruits);
$hasApple = in_array("Apple", $fruits);

echo "Original: " . $text . "<br>";
echo "Length: " . $length . "<br>";
echo "Uppercase: " . $upper . "<br>";
echo "Lowercase: " . $lower . "<br>";
echo "Total Fruits: " . $count . "<br>";
echo "Has Apple: " . ($hasApple ? "Yes" : "No") . "<br>";
?>