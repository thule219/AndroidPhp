<?php

include "connect.php";
$id_cart = $_GET['id_cart'];
$query = "DELETE FROM `cart` WHERE `id_cart` = " . $id_cart;
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);


?>