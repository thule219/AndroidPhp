<?php
include "connect.php";
$email = $_POST["email"];
$password = $_POST["password"];
$username = $_POST["username"];
$numberphone = $_POST["numberphone"];

$query = "INSERT INTO tb_user (username, email, password, numberphone) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ssss', $username, $email, $password, $numberphone);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>