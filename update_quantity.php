<?php
include "connect.php";
// Retrieve the request body
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);

// echo [$data->id_cart, $data->quantity];
// Retrieve the id_cart and quantity from the request body
$id_cart = $data->id_cart;
$quantity = $data->quantity;
$sql = "UPDATE cart SET quantity=$quantity WHERE id_cart=$id_cart";
echo $sql;
$stmt = mysqli_prepare($conn, $sql);
// mysqli_stmt_bind_param($stmt, 'ss', $id_cart, $quantity);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>