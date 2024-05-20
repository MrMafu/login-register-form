<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php"><button>Home</button></a>
    <h1>Register</h1>
    <form action="./control.php" method="post">
        <input type="text" name="username" placeholder="Ketik nama disini..">
        <input type="password" name="password" placeholder="Ketik password disini..">
        <button type="submit" name="action" value="register">Register</button>
        <h4>Sudah punya akun? <a href="login.php">Login</a></h4>
    </form>
</body>
</html>