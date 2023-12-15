"<?php
$pageTitle = "Home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #aed9e0, #ffb6c1);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .header-container {
            width: 100%;
            position: absolute;
            top: 0;
        }

        .landing-content {
            text-align: center;
            color: #333;
            max-width: 600px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #333;
        }

        h2 {
            font-size: 1.5em;
            color: #555;
        }

        .footer-container {
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        /* Add some animations */
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="header-container">
        <?php include "view-header.php"; ?>
    </div>

    <div class="landing-content fade-in">
        <h1>Welcome to the Formula 1 Portal</h1>
        <h2>Click on any of the navigation tabs to learn/explore more</h2>
    </div>

    <div class="footer-container">
        <?php include "view-footer.php"; ?>
    </div>
</body>
</html>
