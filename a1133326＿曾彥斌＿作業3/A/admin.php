<?php
session_start();
// 權限檢查：如果沒登入 或 角色不是 admin，踢回登入頁
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>管理員專區</title></head>
<body style="background: #ffe6e6;">
    <h1>⚙️ 管理員專屬頁面</h1>
    <p>歡迎您，管理者 <b><?= $_SESSION['user_id'] ?></b>！您擁有最高權限。</p>
    
    <hr>
    <a href="index.php">🏠 回首頁查看 Cookie</a> | 
    <a href="logout.php" style="color:red;">🚪 登出系統</a>
</body>
</html>