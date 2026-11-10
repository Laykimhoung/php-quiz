<?php
$subjects = [
    'Web Application' => '',
    'Database Systems' => '',
    'Computer Network' => '',
    'Python Programming' => ''
];

$studentName = $_POST['student_name'] ?? '';
$scores = $_POST['scores'] ?? $subjects;
$submitted = false;
$total = 0.0;
$average = 0.0;
$highest = 0.0;
$lowest = 0.0;

if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    $submitted = true;
    $total = array_sum($scores);
    $average = $total / count($scores);
    $highest = max($scores);
    $lowest = min($scores);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Scores Form</title>
</head>
<body>
    <h2>Student Scores Form (Array & Foreach)</h2>

    <form method="POST" action="">
        <p>
            <label>Student Name: </label>
            <input type="text" name="student_name" value="<?= htmlspecialchars($studentName) ?>" required>
        </p>

        <h3>Enter Subject Scores</h3>
        <?php foreach ($scores as $subject => $score): ?>
            <p>
                <label><?= htmlspecialchars($subject) ?>: </label>
                <input type="number" min="0" max="100" step="any" name="scores[<?= htmlspecialchars($subject) ?>]" value="<?= htmlspecialchars((string)$score) ?>" required>
            </p>
        <?php endforeach; ?>

        <button type="submit">Submit & Calculate</button>
    </form>

    <?php if ($submitted): ?>
        <hr>
        <h3>Results for: <?= htmlspecialchars($studentName) ?></h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Score</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scores as $subject => $score): ?>
                    <tr>
                        <td><?= htmlspecialchars($subject) ?></td>
                        <td><?= htmlspecialchars((string)$score) ?></td>
                        <td><?= (float)$score >= 50 ? 'Pass' : 'Fail' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p>Total Score: <b><?= $total ?></b></p>
        <p>Average Score: <b><?= round($average, 2) ?></b></p>
        <p>Highest Score: <b><?= $highest ?></b></p>
        <p>Lowest Score: <b><?= $lowest ?></b></p>
    <?php endif; ?>
</body>
</html>
