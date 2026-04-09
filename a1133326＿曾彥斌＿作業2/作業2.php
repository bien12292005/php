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
    <title>夏令營報名表</title>
</head>
<body>
    <h1>夏令營報名表</h1>
    <form method="POST" action="result.php">
        學員姓名：<input type="text" name="name" /><br><br>
        出生日期：<input type="date" name="birthday" /><br><br>
        家長姓名：<input type="text" name="parent" /><br><br>
        聯絡電話：<input type="tel" name="phone" /><br><br>
        電子郵件：<input type="email" name="email" /><br><br>
        備註：<textarea name="note"></textarea><br><br>
        <button type="submit">送出報名</button>
    </form>
</body>
</html>