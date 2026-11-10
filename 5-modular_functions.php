<?php require_once 'import/functions.php'; ?>
<?php require 'import/header.php'; ?>
<?php include 'import/sidebar.php'; ?>
<?php
$studentName = "Kimhoung";
$score = 88.5;
$fee = 350.0;

$title = formatTitle("Student Grade & Tuition Report");
$grade = calculateGrade($score);
$formattedFee = formatCurrency($fee);
?>
<main>
    <h3><?= htmlspecialchars($title) ?></h3>
    <p>Student Name: <b><?= htmlspecialchars($studentName) ?></b></p>
    <p>Exam Score: <?= $score ?> => Grade: <b><?= $grade ?></b></p>
    <p>Tuition Balance: <b><?= $formattedFee ?></b></p>
</main>
<?php include 'import/footer.php'; ?>
