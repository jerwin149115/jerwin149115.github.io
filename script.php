<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data']; // Retrieve data sent from Java
    // Process the data (e.g., perform actions based on the data)
    echo "Processed data: " . $data;
} else {
    echo "Invalid request";
}
?>
