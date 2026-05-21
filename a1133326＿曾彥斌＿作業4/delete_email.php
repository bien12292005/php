<?php
require 'db.php';

$no = $_POST['no'];
mysqli_query($conn, "DELETE FROM emails WHERE no=$no");

header("Location: index.php");
?>