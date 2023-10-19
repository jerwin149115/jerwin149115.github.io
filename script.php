<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Queue Management System</h1>
        <div class="queue-number">
            <h2>Current Queue Number:</h2>
            <?php
            if (isset($_POST['numberQueue'])) {
                $numberQueue = $_POST['numberQueue'];
                echo '<p>' . $numberQueue . '</p>';
            } else {
                echo '<p>No data received</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
