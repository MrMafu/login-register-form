<?php
session_start();

$link = mysqli_connect('localhost','root','');

mysqli_select_db($link, "form");

$username = $_POST['username'];
$password = $_POST['password'];
$action = $_POST['action'];

if (isset($action)) {
    if ($action === 'login') {
        $sql = mysqli_query($link, "SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password'");
        if ($result_total = mysqli_num_rows($sql) === 0) {
            header('Location: login.php?msg=Username%20atau%20Password%20salah!!');
            exit();
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: index.php');
            exit();
        }
    }
    if ($action === 'register') {
        $sql = mysqli_query($link, "INSERT INTO user (`username`,`password`) VALUES ('$username', '$password')");
        if (!$sql) {
            echo "Gagal menambahkan data ke dalam database";
        }
        header('Location: login.php');
        exit();
    }
    if ($action === 'logout') {
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
?>
