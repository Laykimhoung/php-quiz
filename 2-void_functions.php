<?php
function showBanner(): void {
    echo "------------------------------------<br>";
    echo "Angkor University - Student Portal<br>";
    echo "------------------------------------<br>";
}

function displayStudent(string $name, int $age, string $major): void {
    echo "Student: " . $name . " | Age: " . $age . " | Major: " . $major . "<br>";
}

showBanner();
displayStudent("Sokha", 20, "Computer Science");
displayStudent("Dara", 21, "Information Technology");
?>