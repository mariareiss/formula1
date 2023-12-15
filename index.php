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
            max-width: 800px;
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

        .slider-container {
            width: 100%;
            overflow: hidden;
            margin-top: 20px;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 1200px; /* Adjusted to accommodate three 400px images */
            margin: 0 auto;
        }

        .slide {
            min-width: 400px; /* Width of each slide */
            box-sizing: border-box;
        }

        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio and cover the entire box */
        }


        .button-container {
            margin-top: 20px;
        }

        .cta-button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
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
        <h2>Explore the thrilling world of Formula 1 racing</h2>

        <!-- Image Slider -->
        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="f1logo.jpg" alt="Formula 1 Image 1"></div>
                <div class="slide"><img src="f1.2.jpg" alt="Formula 1 Image 2"></div>
                <div class="slide"><img src="f1.3.jpg" alt="Formula 1 Image 3"></div>
            </div>
        </div>

        <!-- Call-to-Action Button -->
        <div class="button-container">
            <button class="cta-button">Explore Now</button>
        </div>
    </div>

    <div class="footer-container">
        <?php include "view-footer.php"; ?>
    </div>

    <!-- Script for Image Slider -->
    <script>
        const slider = document.querySelector('.slider');
        let isDragging = false;
        let startPosX = 0;
        let currentTranslate = 0;
        let prevTranslate = 0;

        slider.addEventListener('mousedown', (e) => {
            isDragging = true;
            startPosX = e.clientX;
        });

        slider.addEventListener('mousemove', (e) => {
            if (isDragging) {
                const currentPosX = e.clientX;
                const deltaX = currentPosX - startPosX;
                currentTranslate = prevTranslate + deltaX;
                slider.style.transform = `translateX(${currentTranslate}px)`;
            }
        });

        slider.addEventListener('mouseup', () => {
            isDragging = false;
            prevTranslate = currentTranslate;
        });

        slider.addEventListener('mouseleave', () => {
            isDragging = false;
            prevTranslate = currentTranslate;
        });
    </script>
</body>
</html>
