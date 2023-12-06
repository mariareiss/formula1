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
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header-container {
            margin-top: 20px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
    <div class="header-container">
        <?php include "view-header.php"; ?>
    </div>
    <div>
        <h1>Welcome to your Formula 1 Portal</h1>
    </div>
    <?php include "view-footer.php"; ?>
</body>
</html>






