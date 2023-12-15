<?php
$pageTitle = "Game";
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

        p {
            margin-top: 10px;
        }

        #score {
            font-size: 18px;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Driving Simulator</h1>
        <p id="instructions">Use the Arrow keys (Right/Left) to navigate and avoid obstacles.</p>
        <p id="score">Score: 0</p>
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

        const obstacle = {
            x: canvas.width - 50,
            y: 200,
            width: 20,
            height: 20,
            color: '#00ff00',
            speed: 5
        };

        let score = 0;
        let gameSpeed = 5;

        function drawCar() {
            ctx.fillStyle = car.color;
            ctx.fillRect(car.x, car.y, car.width, car.height);
        }

        function drawObstacle() {
            ctx.fillStyle = obstacle.color;
            ctx.fillRect(obstacle.x, obstacle.y, obstacle.width, obstacle.height);
        }

        function drawScore() {
            ctx.fillStyle = '#333';
            ctx.font = '20px Arial';
            ctx.fillText(`Score: ${score}`, 10, 30);
        }

        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        function update() {
            clearCanvas();
            obstacle.x -= gameSpeed;

            if (obstacle.x + obstacle.width < 0) {
                obstacle.x = canvas.width;
                score++;
                gameSpeed += 0.5; // Increase game speed over time
            }

            drawCar();
            drawObstacle();
            drawScore();

            // Check for collision
            if (
                car.x < obstacle.x + obstacle.width &&
                car.x + car.width > obstacle.x &&
                car.y < obstacle.y + obstacle.height &&
                car.y + car.height > obstacle.y
            ) {
                gameOver();
            }
        }

        function handleKeyPress(e) {
            if (e.key === 'ArrowRight' && car.x + car.width < canvas.width) {
                car.x += car.speed;
            } else if (e.key === 'ArrowLeft' && car.x > 0) {
                car.x -= car.speed;
            }

            update();
        }

        function gameOver() {
            alert(`Game Over! Your score is ${score}.`);
            resetGame();
        }

        function resetGame() {
            score = 0;
            gameSpeed = 5;
            car.x = 50;
            obstacle.x = canvas.width - 50;
            update();
        }

        setInterval(update, 1000 / 60); // Update every 60 frames per second
        document.addEventListener('keydown', handleKeyPress);
    </script>

</body>
</html>

<?php
include "view-footer.php";
?>
