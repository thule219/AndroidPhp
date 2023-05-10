<?php
include "connect.php";
$query = "SELECT LAST_INSERT_ID() AS id_shipping";
if ($conn->multi_query($query)) {
    do {
        // Store first result set
        if ($result = $conn->store_result()) {
            $row = $result->fetch_assoc();
            $response['status'] = 'success';
            $response['id_shipping'] = $row['id_shipping'];
            $result->free();
        }
    } while ($conn->next_result());
} else {
    $response['status'] = 'error';
    $response['message'] = 'Error adding shipping information: '.$conn->error;
}

echo json_encode($response);

?>