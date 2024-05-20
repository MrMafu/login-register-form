<?php 
session_start();

$username = (isset($_SESSION['username']) ? $_SESSION['username'] : "");
$password = (isset($_SESSION['password']) ? $_SESSION['password'] : "");
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
    <?php 
    if(!empty($username) && !empty($password)){
        echo "<h1>Selamat datang!</h1>
        <p>Username: $username </p>
        <p>Password: $password </p>
        <form action='control.php' method='post'>
            <button type='submit' name='action' value='logout'>Logout</button>
        </form>";
    } else {
        echo "<h1>Maaf, anda belum login</h1>
        <h4>Klik tombol di bawah untuk login</h4>
        <a href='login.php'><button>Login</button></a>
        <h4>Belum punya akun? <a href='register.php'>Register</a></h4>";
    }
    ?>
</body>
</html>