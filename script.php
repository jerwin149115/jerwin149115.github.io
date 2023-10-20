<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data']; 
    echo "Processed data: " . $data;
} else {
    echo "Invalid request";
}
?>
