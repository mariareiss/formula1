<?php
$pageTitle = "Insights";
include "view-header.php";
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

        .insights-container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        .dropdown {
            margin-bottom: 20px;
        }

        .dropdown select {
            padding: 10px;
            font-size: 16px;
        }

        .analysis-content {
            text-align: justify;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
    <title>F1 Insights</title>
</head>

<body>
    <header>
        <h1>F1 Insights</h1>
    </header>

    <div class="insights-container">
        <div class="dropdown">
            <label for="insights-topic">Select a Topic:</label>
            <select id="insights-topic" onchange="changeInsight()">
                <option value="car-components">Car Components</option>
                <option value="strategies">Strategies</option>
            </select>
        </div>

        <div class="analysis-content" id="car-components-content">
            <h2>Car Components in Formula 1</h2>
            <p>Formula 1 cars are intricate machines with various components that contribute to their performance. Here are some key components:</p>
            <ul>
                <li><strong>Chassis:</strong> The main structure of the car, providing support and housing various components.</li>
                <li><strong>Power Unit:</strong> Includes the engine, energy recovery systems, and hybrid components.</li>
                <li><strong>Aerodynamics Package:</strong> Wings, diffusers, and bargeboards that optimize airflow for speed and handling.</li>
                <li><strong>Suspension System:</strong> Components that connect the wheels to the chassis, affecting ride and handling.</li>
                <li><strong>Braking System:</strong> Discs, calipers, and pads that control the car's speed and stability.</li>
            </ul>
        </div>

        <div class="analysis-content" id="strategies-content" style="display: none;">
            <h2>Strategies in Formula 1</h2>
            <p>Teams in Formula 1 employ various strategies to gain a competitive edge during races. Here are some common strategies:</p>
            <ul>
                <li><strong>Pit Stop Strategies:</strong> Timing and frequency of pit stops for tire changes, fueling, and adjustments.</li>
                <li><strong>Tire Management:</strong> Strategies to preserve tire life and optimize grip throughout the race.</li>
                <li><strong>Fuel Management:</strong> Efficient use of fuel to maximize performance without running out during the race.</li>
                <li><strong>Overtaking Strategies:</strong> Tactics to pass competitors while minimizing time and risk.</li>
                <li><strong>Qualifying Strategies:</strong> Approaches to secure a favorable starting position on the grid.</li>
            </ul>
        </div>
    </div>

    <?php
    include "view-footer.php";
    ?>

    <script>
        function changeInsight() {
            var topic = document.getElementById('insights-topic').value;
            var carComponentsContent = document.getElementById('car-components-content');
            var strategiesContent = document.getElementById('strategies-content');

            if (topic === 'car-components') {
                carComponentsContent.style.display = 'block';
                strategiesContent.style.display = 'none';
            } else if (topic === 'strategies') {
                carComponentsContent.style.display = 'none';
                strategiesContent.style.display = 'block';
            }
        }
    </script>
</body>

</html>
