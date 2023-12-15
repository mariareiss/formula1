<?php
$pageTitle = "Race Results";
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
      margin: 30px;
      text-align: center;
      max-width: 1600px;
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
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .grid-item:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .car {
      width: 80px;
      height: 40px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      border-radius: 8px;
      background-color: #007bff;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: bold;
      font-size: 14px;
      user-select: none;
    }

    button {
      display: block;
      margin: 10px auto;
      padding: 8px 16px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 4px;
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
    <div class="grid-container" id="pilots">
      <div class="grid-item" onclick="selectPilot('red', true)">
        <div class="car">Lewis Hamilton</div>
      </div>
      <div class="grid-item" onclick="selectPilot('blue', true)">
        <div class="car">Max Verstappen</div>
      </div>
      <div class="grid-item" onclick="selectPilot('green', true)">
        <div class="car">Charles Leclerc</div>
      </div>
    </div>

    <div class="instructions">
      <h2>Set speed for each pilot:</h2>
    </div>

    <div class="grid-container">
      <div class="grid-item">
        <input type="range" id="speedRed" min="1" max="50" value="25" onchange="setSpeed('red', this.value)">
        <label for="speedRed">Lewis Hamilton</label>
      </div>
      <div class="grid-item">
        <input type="range" id="speedBlue" min="1" max="50" value="25" onchange="setSpeed('blue', this.value)">
        <label for="speedBlue">Max Verstappen</label>
      </div>
      <div class="grid-item">
        <input type="range" id="speedGreen" min="1" max="50" value="25" onchange="setSpeed('green', this.value)">
        <label for="speedGreen">Charles Leclerc</label>
      </div>
    </div>

    <div class="track" id="raceTrack">
      <div class="car" id="redCar" onmousedown="startDrag(event, 'red')"><span class="car-text">Lewis Hamilton</span></div>
      <div class="car" id="blueCar" onmousedown="startDrag(event, 'blue')"><span class="car-text">Max Verstappen</span></div>
      <div class="car" id="greenCar" onmousedown="startDrag(event, 'green')"><span class="car-text">Charles Leclerc</span></div>
    </div>

    <button onclick="startRace()">Start Race</button>
    <button onclick="stopRace()">Stop Race</button>
    <button onclick="restartRace()">Restart Race</button>
  </div>

  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "view-footer.php";
?>
