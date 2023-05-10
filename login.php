<?php
include "connect.php";
$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM `tb_user` WHERE `email` LIKE '".$email."AND `password` LIKE '".$password."'";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>