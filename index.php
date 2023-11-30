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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 3rem;
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

