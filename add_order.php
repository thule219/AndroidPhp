<?php
include "connect.php";
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$order_total= $data->order_total;
$email= $data->email;
$order_status = $data->order_status;
$order_date = $data->order_date;
$id_shipping = $data->id_shipping;
$id_coupon = $data->id_coupon;
$query = "INSERT INTO orders (email, order_status, order_total, order_date, id_shipping,id_coupon) 
        VALUES ('$email','$order_status','$order_total','$order_date','$id_shipping','$id_coupon')";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
$id_order = mysqli_insert_id($conn);
mysqli_close($conn);
echo json_encode(array("id_order" => $id_order));

?>