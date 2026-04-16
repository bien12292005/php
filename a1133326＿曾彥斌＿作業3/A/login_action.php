<?php
session_start();

$users = [
    's01' => ['pwd' => '123', 'role' => 'student'],
    't01' => ['pwd' => '123', 'role' => 'teacher'],
    'a01' => ['pwd' => '123', 'role' => 'admin']
];

$id = $_POST['user_id'] ?? '';
$pwd = $_POST['password'] ?? '';

if (isset($users[$id]) && $users[$id]['pwd'] === $pwd) {
    
    $_SESSION['logged_in'] = true;
    $_SESSION['role'] = $users[$id]['role'];
    $_SESSION['user_id'] = $id;

    setcookie('user_id', $id, time() + 86400, "/");

    if ($users[$id]['role'] === 'student') header("Location: student.php");
    if ($users[$id]['role'] === 'teacher') header("Location: teacher.php");
    if ($users[$id]['role'] === 'admin')   header("Location: admin.php");
    
} else {
    $_SESSION['error'] = "帳號或密碼錯誤！";
    header("Location: index.php");
}
exit();
?>