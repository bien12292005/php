<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8" />
    <title>登入</title>
</head>
<body>
    <h1>登入</h1>
    <?php if (isset($_SESSION['login_error'])): ?>
        <p style="color:red;"><?= $_SESSION['login_error'] ?></p>
        <?php unset($_SESSION['login_error']); ?>
    <?php endif; ?>
    <form method="POST" action="logincheck.php">
        帳號：<input type="text" name="username" /><br><br>
        密碼：<input type="password" name="password" /><br><br>
        <button type="submit">登入</button>
    </form>
</body>
</html>