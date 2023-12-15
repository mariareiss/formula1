<?php
$pageTitle = "F1 Race Simulator";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Race Simulator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 0vh;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #001f3f; /* Dark blue color */
            color: #fff;
            border-bottom: 2px solid #fff;
            width: 100%;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        canvas {
            border: 2px solid #333;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <header>
    <h1>F1 Race Simulator</h1>
    </header>
    
    <canvas id="raceCanvas" width="800" height="400"></canvas>

    <script>
        const canvas = document.getElementById('raceCanvas');
        const ctx = canvas.getContext('2d');

        const car = {
            x: 50,
            y: 200,
            width: 30,
            height: 15,
            color: '#ff0000',
            speed: 5
        };

        function drawCar() {
            ctx.fillStyle = car.color;
            ctx.fillRect(car.x, car.y, car.width, car.height);
        }

        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        function update() {
            clearCanvas();
            drawCar();
        }

        function handleKeyPress(e) {
            if (e.key === 'ArrowRight' && car.x + car.width < canvas.width) {
                car.x += car.speed;
            } else if (e.key === 'ArrowLeft' && car.x > 0) {
                car.x -= car.speed;
            }

            update();
        }

        document.addEventListener('keydown', handleKeyPress);
    </script>

</body>
</html>

<?php
include "view-footer.php";
?>
