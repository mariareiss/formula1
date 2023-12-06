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
            justify-content: center;
            height: 100vh; /* Ensures the content is centered vertically */
            margin: 0; /* Removes default body margin */
        }

        h1 {
            width: 100%;
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



