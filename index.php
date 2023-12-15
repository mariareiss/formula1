<?php
$pageTitle = "Home";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to an external CSS file for better organization -->
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
            color: #fff; /* White text for better visibility on the background */
            max-width: 400px;
            padding: 20px; /* Added padding for better spacing */
            background-blend-mode: overlay; /* Blend mode for a better blend with the background */
            border-radius: 15px; /* Added border-radius for a softer look */
        }

        .landing-content2 {
            text-align: center;
            color: #333;
            max-width: 800px;
        }

        h1 {
            font-size: 3em; /* Increased font size for a bold impact */
            margin-bottom: 15px;
            color: #007bff; /* Formula 1 blue color */
        }

        h2 {
            font-size: 1.8em; /* Adjusted font size for better readability */
            color: #fff; /* White text for better visibility on the background */
            margin-bottom: 30px;
        }

        .landing-image {
            width: 100%; /* Ensure the image takes the full width of the container */
            border-radius: 15px; /* Added border-radius for a softer look */
            margin-top: 20px; /* Added margin for spacing between text and image */
        }

        .footer-container {
            width: 100%;
            position: absolute;
            bottom: 0;
            padding: 10px; /* Added padding for a cleaner footer */
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

    <div class="landing-content2">
        <h1>Welcome to the Formula 1 Portal</h1>
        <h2>Click on any of the navigation tabs to learn/explore more</h2>
    </div>
    
    <div class="landing-content fade-in">
        <img class="landing-image" src="f1.2.jpg" alt="Formula 1 Image"> 
    </div>

    <div class="footer-container">
        <?php include "view-footer.php"; ?>
    </div>
</body>

</html>
