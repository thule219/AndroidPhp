<?php
include "connect.php";
$id_product = $_POST["id_product"];
$email = $_POST["email"];
$quantity= $_POST["quantity"];


$query = "INSERT INTO cart (id_product, email, quantity) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'sss', $id_product, $email, $quantity);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>