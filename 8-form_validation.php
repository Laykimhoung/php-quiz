<?php
$errors = [];
$successMessage = '';
$fullname = '';
$email = '';
$age = '';

if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');

    if (empty($fullname)) {
        $errors['fullname'] = "Full name is required.";
    } elseif (strlen($fullname) < 3) {
        $errors['fullname'] = "Full name must be at least 3 characters.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($age)) {
        $errors['age'] = "Age is required.";
    } elseif (filter_var($age, FILTER_VALIDATE_INT) === false || (int)$age < 18) {
        $errors['age'] = "Age must be an integer of at least 18.";
    }

    if (empty($errors)) {
        $successMessage = "Validation passed successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server-Side Form Validation</title>
</head>
<body>
    <h2>Student Registration Form</h2>

    <?php if (!empty($successMessage)): ?>
        <p style="color: green; font-weight: bold;"><?= $successMessage ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div>
            <label>Full Name: </label>
            <input type="text" name="fullname" value="<?= htmlspecialchars($fullname) ?>">
            <span style="color: red;"><?= $errors['fullname'] ?? '' ?></span>
        </div>
        <br>
        <div>
            <label>Email: </label>
            <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
            <span style="color: red;"><?= $errors['email'] ?? '' ?></span>
        </div>
        <br>
        <div>
            <label>Age: </label>
            <input type="text" name="age" value="<?= htmlspecialchars($age) ?>">
            <span style="color: red;"><?= $errors['age'] ?? '' ?></span>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
