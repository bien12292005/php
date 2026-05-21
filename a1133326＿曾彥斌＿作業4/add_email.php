<?php
require 'db.php';

$email = $_POST['email'];
mysqli_query($conn, "INSERT INTO emails (email) VALUES ('$email')");

header("Location: index.php");
?>