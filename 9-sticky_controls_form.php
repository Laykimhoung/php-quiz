<?php
$fullname = $_POST['fullname'] ?? '';
$gender = $_POST['gender'] ?? 'male';
$city = $_POST['city'] ?? 'Siem Reap';
$skills = $_POST['skills'] ?? [];
$bio = $_POST['bio'] ?? '';
$isSubmitted = (($_SERVER["REQUEST_METHOD"] ?? '') === "POST");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sticky Form Multi-Controls</title>
</head>
<body>
    <h2>User Profile Form (Sticky Controls)</h2>
    <form method="POST" action="">
        <div>
            <label>Full Name: </label>
            <input type="text" name="fullname" value="<?= htmlspecialchars($fullname) ?>">
        </div>
        <br>
        <div>
            <label>Gender: </label>
            <input type="radio" name="gender" value="male" <?= $gender === 'male' ? 'checked' : '' ?>> Male
            <input type="radio" name="gender" value="female" <?= $gender === 'female' ? 'checked' : '' ?>> Female
        </div>
        <br>
        <div>
            <label>City: </label>
            <select name="city">
                <option value="Siem Reap" <?= $city === 'Siem Reap' ? 'selected' : '' ?>>Siem Reap</option>
                <option value="Phnom Penh" <?= $city === 'Phnom Penh' ? 'selected' : '' ?>>Phnom Penh</option>
                <option value="Battambang" <?= $city === 'Battambang' ? 'selected' : '' ?>>Battambang</option>
            </select>
        </div>
        <br>
        <div>
            <label>Programming Skills: </label>
            <input type="checkbox" name="skills[]" value="PHP" <?= in_array('PHP', $skills) ? 'checked' : '' ?>> PHP
            <input type="checkbox" name="skills[]" value="JavaScript" <?= in_array('JavaScript', $skills) ? 'checked' : '' ?>> JavaScript
            <input type="checkbox" name="skills[]" value="SQL" <?= in_array('SQL', $skills) ? 'checked' : '' ?>> SQL
        </div>
        <br>
        <div>
            <label>Bio: </label><br>
            <textarea name="bio" rows="3" cols="40"><?= htmlspecialchars($bio) ?></textarea>
        </div>
        <br>
        <button type="submit">Save Profile</button>
    </form>

    <?php if ($isSubmitted): ?>
        <h3>Submitted Information:</h3>
        <p>Name: <?= htmlspecialchars($fullname) ?></p>
        <p>Gender: <?= htmlspecialchars($gender) ?></p>
        <p>City: <?= htmlspecialchars($city) ?></p>
        <p>Skills: <?= htmlspecialchars(implode(', ', $skills)) ?></p>
        <p>Bio: <?= htmlspecialchars($bio) ?></p>
    <?php endif; ?>
</body>
</html>
