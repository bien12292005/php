<?php
session_start();
session_unset();    // 清除所有 Session 變數
session_destroy();  // 銷毀 Session
header("Location: index.php"); // 導回登入頁面
exit();
?>