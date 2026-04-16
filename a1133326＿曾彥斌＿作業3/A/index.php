<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>角色登入系統</title>
</head>
<body>
    <h1>系統登入</h1>

    <!-- 顯示 Cookie 狀態 -->
    <div style="background: #eee; padding: 10px; margin-bottom: 20px;">
        <?php if(isset($_COOKIE['user_id'])): ?>
            <p>🍪 目前 Cookie 紀錄的帳號為：<strong><?= htmlspecialchars($_COOKIE['user_id']) ?></strong></p>
            <a href="delete_cookie.php">🗑️ 刪除 Cookie</a>
        <?php else: ?>
            <p>🍪 目前沒有儲存 Cookie</p>
        <?php endif; ?>
    </div>

    <!-- 顯示登入錯誤訊息 -->
    <?php if(isset($_SESSION['error'])): ?>
        <p style="color: red;"><?= $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>

    <form action="login_action.php" method="POST">
        帳號：<input type="text" name="user_id" required placeholder="輸入 s01, t01 或 a01"><br><br>
        密碼：<input type="password" name="password" required placeholder="輸入 123"><br><br>
        <button type="submit">登入</button>
    </form>
</body>
</html>