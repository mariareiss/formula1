<?php
$pageTitle = "Home";
include "view-header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            justify-content: center;
            align-items: center;
        }

        div {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Welcome to your Formula 1 Portal</h1>
    </div>
    <?php
    include "view-footer.php";
    ?>
</body>
</html>
