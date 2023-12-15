<?php
$pageTitle = "Race Simulation";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formula 1 Race Simulation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #001f3f; /* Dark blue color */
            color: #fff;
            border-bottom: 2px solid #fff;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .grid-container {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            justify-content: center;
        }

        .grid-item {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out, background-color 0.3s ease;
        }

        .grid-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .selected {
            background-color: #0056b3; /* Darker blue color */
        }

        button {
            display: block;
            margin: 10px auto;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header>
        <h1>Formula 1 Race Simulation</h1>
    </header>

    <div class="container">
        <div class="grid-container" id="driversGrid">
            <!-- Drivers grid with driver names -->
            <div class="grid-item" onclick="selectDriver('Lewis Hamilton')">
                <p class="team-name">Lewis Hamilton</p>
            </div>

            <div class="grid-item" onclick="selectDriver('Max Verstappen')">
                <p class="team-name">Max Verstappen</p>
            </div>

            <div class="grid-item" onclick="selectDriver('Charles Leclerc')">
                <p class="team-name">Charles Leclerc</p>
            </div>
        </div>

        <button onclick="startRace()">Start Race</button>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const selectedDrivers = [];

        function selectDriver(driverName) {
            const driverElement = document.getElementById(driverName);
            if (selectedDrivers.includes(driverName)) {
                // Deselect driver
                const index = selectedDrivers.indexOf(driverName);
                selectedDrivers.splice(index, 1);
                driverElement.classList.remove('selected');
            } else {
                // Select driver
                selectedDrivers.push(driverName);
                driverElement.classList.add('selected');
            }
        }

        function startRace() {
            if (selectedDrivers.length === 3) {
                // Start the race simulation with selected drivers
                alert(`Race started with drivers: ${selectedDrivers.join(', ')}`);
            } else {
                alert('Please select exactly 3 drivers to start the race.');
            }
        }
    </script>
</body>

</html>

<?php
include "view-footer.php";
?>
