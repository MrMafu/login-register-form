<?php 
//Mengecek apakah $_GET msg ada atau tidak, contoh $_GET = login.php?msg=Username%20atau%20Password%20salah!! , "Username%20atau%20Password%20salah!!" merupakan variabel $_GET['msg']
$msg = (isset($_GET['msg']) ? $_GET['msg']: "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php"><button>Home</button></a>
    <h1>Login</h1>
    <form action="./control.php" method="post">
        <input type="text" name="username" placeholder="Ketik nama disini..">
        <input type="password" name="password" placeholder="Ketik password disini..">
        <button type="submit" name="action" value="login">Login</button>
    </form>
    <?= (!empty($msg) ? "<h2>Error: $msg</h2>" : "") ?>
    <h4>Belum punya akun? <a href="register.php">Register</a></h4>
</body>
</html>