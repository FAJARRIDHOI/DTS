<!DOCTYPE html>
<html lang="en">
<head>
    <title>MY MVC APLICATION</title>
</head>
<body>
    <?php require 'app/view/' . $view . '.php'; ?>
</body>
</html>

// app/view/home.php
<h1>WELCOM TO THE HOME PAGE</h1>
<h2>User:</h2>
<ul>
    <?php foreach ($user as $user): ?>
        <li><?php echo $user['name']; ?></li>
    <?php endforeach; ?>
</ul>