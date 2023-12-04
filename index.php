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
    <div class="header">
        <p>Welcome to your Formula 1 Portal</p>
    </div>
    <?php
    include "view-header.php";
    include "view-footer.php";
    ?>
</body>
</html>

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.header {
    text-align: center;
}


