<?php
$pageTitle = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }

        h1 {
            margin: 0 auto; /* Centering the h1 horizontally */
            padding: 50px; /* Optional: Add padding for better visual appearance */
        }
    </style>
</head>
<body>
    <div>
        <h1>Welcome to your Formula 1 Portal</h1>
    </div>
    <?php
    include "view-header.php";
    include "view-footer.php";
    ?>
</body>
</html>

