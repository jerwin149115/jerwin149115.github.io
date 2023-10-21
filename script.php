<?php
if ($_SERVER['REQUEST' ] == 'POST') {
    $data = $_POST['postData'] ?? '';
    $response = ['message' => 'Data received sucessfully','data' => $data];
    echo json_encode($response);
} else {
    echo 'no data received';
}
?>
