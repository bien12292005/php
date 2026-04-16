<?php
setcookie('user_id', '', time() - 3600, "/");

$referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header("Location: " . $referer);
exit();
?>