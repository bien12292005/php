<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8" />
    <title>報名結果</title>
</head>
<body>
    <h1>報名成功！</h1>
    <p>姓名：<?= htmlspecialchars($_POST["name"]) ?></p>
    <p>出生日期：<?= htmlspecialchars($_POST["birthday"]) ?></p>
    <p>家長姓名：<?= htmlspecialchars($_POST["parent"]) ?></p>
    <p>聯絡電話：<?= htmlspecialchars($_POST["phone"]) ?></p>
    <p>電子郵件：<?= htmlspecialchars($_POST["email"]) ?></p>
    <p>備註：<?= htmlspecialchars($_POST["note"]) ?></p>
    <a href="作業2.php">返回報名表</a>
</body>
</html>