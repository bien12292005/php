<?php
session_start();
// 權限檢查：如果沒登入 或 角色不是 teacher，踢回登入頁
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'teacher') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>教師專區</title></head>
<body style="background: #e6ffe6;">
    <h1>👨‍🏫 教師專屬頁面</h1>
    <p>歡迎您，老師 <b><?= $_SESSION['user_id'] ?></b>！您可以在此登記學生成績。</p>
    
    <hr>
    <a href="index.php">🏠 回首頁查看 Cookie</a> | 
    <a href="logout.php" style="color:red;">🚪 登出系統</a>
</body>
</html>