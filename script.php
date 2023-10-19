<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["numberQueue"])) {
        $numberQueue = $_POST["numberQueue"];
        // Handle the received data, e.g., store it in a database.
        echo "Data received successfully.";
    } else {
        echo "Number Queue parameter not found.";
    }
} else {
    echo "Invalid request method.";
}
?>