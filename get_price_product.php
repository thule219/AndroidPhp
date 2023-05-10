<?php

include "connect.php";
$id_product = $_GET['id_product'];
$query = "SELECT `price` FROM `product` where `id_product` = ". $id_product;
// $query = "SELECT * FROM `product` ";
$data = mysqli_query($conn,$query);
$result = array();
while($row = mysqli_fetch_assoc($data)){
    $result[] = ($row);
}
if(!empty($result)){
    header('Content-Type: application/json; charset=utf-8');
    echo(json_encode($result));
}else{
    $arr = [
        'success'=>false,
        'message' => "khong thanh cong",
        'result'=>$result
    ];
    print_r(json_encode($arr));
}

?>