<?php
$keyword = $_GET['q'] ?? '';
$category = $_GET['cat'] ?? 'all';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Search Form</title>
</head>
<body>
    <h2>Course Search (GET Method)</h2>
    <form method="GET" action="">
        <input type="text" name="q" placeholder="Enter keyword..." value="<?= htmlspecialchars($keyword) ?>">
        <select name="cat">
            <option value="all" <?= $category === 'all' ? 'selected' : '' ?>>All Categories</option>
            <option value="cs" <?= $category === 'cs' ? 'selected' : '' ?>>Computer Science</option>
            <option value="it" <?= $category === 'it' ? 'selected' : '' ?>>Information Technology</option>
        </select>
        <button type="submit">Search</button>
    </form>

    <?php if (!empty($keyword)): ?>
        <p>Search Results for: <b><?= htmlspecialchars($keyword) ?></b> (Category: <?= htmlspecialchars($category) ?>)</p>
    <?php endif; ?>
</body>
</html>

