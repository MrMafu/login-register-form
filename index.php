<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (!empty($username)): ?>
        <h1>Welcome, <?php echo htmlspecialchars($username); ?></h1>
        <form action="control.php" method="post">
            <button type="submit" name="action" value="logout">Logout</button>
        </form>
    <?php else: ?>
        <h1>You are not logged in</h1>
        <a href="login.php"><button>Login</button></a>
        <a href="register.php"><button>Register</button></a>
    <?php endif; ?>
</body>
</html>