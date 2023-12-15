<?php
$pageTitle = "index";
include "view-header.php";
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
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .content-container {
            text-align: center;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #333;
        }

        h2 {
            font-size: 1.5em;
            color: #555;
            margin-bottom: 20px;
        }

        .image-container {
            width: 100%;
            max-width: 800px;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
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
    <div class="content-container fade-in">
        <h1>Welcome to the Formula 1 Portal</h1>
        <h2>Explore the thrilling world of Formula 1 racing</h2>

        <!-- Single Image -->
        <div class="image-container">
            <img src="f1.2.jpg" alt="Formula 1 Image 2">
        </div>
    </div>
</body>
</html>
