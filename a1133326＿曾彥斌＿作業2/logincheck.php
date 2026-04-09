<?php
session_start();

$valid_username = "admin";
$valid_password = "1234";

if ($_POST["username"] === $valid_username && $_POST["password"] === $valid_password) {
    $_SESSION['logged_in'] = true;
    header("Location: 作業2.php");
} else {
    $_SESSION['login_error'] = "帳號或密碼錯誤！";
    header("Location: login.php");
}
exit();
?>