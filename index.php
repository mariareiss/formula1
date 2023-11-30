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
            justify-content:center;
        }

        h1 {
            width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
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

