<?php
include "connect.php";
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$shipping_address = $data->shipping_address;
$shipping_name = $data->shipping_name;
$shipping_phone = $data->shipping_phone;
$shipping_note = $data->shipping_note;
$query = "INSERT INTO shipping (shipping_name, shipping_address, shipping_phone, shipping_note) 
        VALUES ('$shipping_name','$shipping_address','$shipping_phone','$shipping_note')";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
$id_shipping = mysqli_insert_id($conn);
mysqli_close($conn);
echo json_encode(array("id_shipping" => $id_shipping));

?>