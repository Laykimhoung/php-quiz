<?php
$message = '';

if (($_SERVER["REQUEST_METHOD"] ?? '') === "POST") {
    $username = $_POST['username'] ?? '';
    $message = "Login attempt received for username: " . htmlspecialchars($username);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST Request Form</title>
</head>
<body>
    <h2>User Login (POST Method)</h2>
    <form method="POST" action="">
        <div>
            <label>Username: </label>
            <input type="text" name="username" required>
        </div>
        <br>
        <div>
            <label>Password: </label>
            <input type="password" name="password" required>
        </div>
        <br>
        <button type="submit">Login</button>
    </form>

    <?php if (!empty($message)): ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
</body>
</html>
