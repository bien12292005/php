<?php
session_start();
// 權限檢查：如果沒登入 或 角色不是 student，踢回登入頁
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'student') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>學生專區</title></head>
<body style="background: #e6f7ff;">
    <h1>🎓 學生專屬頁面</h1>
    <p>歡迎您，學生 <b><?= $_SESSION['user_id'] ?></b>！</p>
    
    <hr>
    <a href="index.php">🏠 回首頁查看 Cookie</a> | 
    <a href="logout.php" style="color:red;">🚪 登出系統</a>
</body>
</html>