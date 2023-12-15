<?php
$pageTitle = "Race Results";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Formula 1 Race Simulation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      text-align: center;
      padding: 20px;
      background-color: #001f3f;
      color: #fff;
      border-bottom: 2px solid #fff;
    }

    nav {
      background-color: #001f3f;
      color: #fff;
      padding: 10px;
    }

    .navbar-brand {
      color: #fff !important;
    }

    h1 {
      margin: 0;
      font-size: 28px;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .track {
      width: 100%;
      height: 400px;
      border: 1px solid #000;
      position: relative;
      margin: 20px 0;
      background-color: #808080;
      border-radius: 4px;
      overflow: hidden;
    }

    .car {
      width: 40px;
      height: 20px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      user-select: none;
    }

    .car:hover {
      background-color: #ccc;
    }

    .car-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 12px;
      font-weight: bold;
      color: #000000;
      pointer-events: none;
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

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Link 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <p>Select pilots:</p>
          <ul id="pilots">
            <li>
              <input type="checkbox" id="redCheckbox" onchange="selectPilot('red', this.checked)">
              <label for="redCheckbox">Lewis Hamilton</label>
            </li>
            <li>
              <input type="checkbox" id="blueCheckbox" onchange="selectPilot('blue', this.checked)">
              <label for="blueCheckbox">Max Verstappen</label>
            </li>
            <li>
              <input type="checkbox" id="greenCheckbox" onchange="selectPilot('green', this.checked)">
              <label for="greenCheckbox">Charles Leclerc</label>
            </li>
          </ul>
        </div>

        <div>
          <p>Set speed for each pilot:</p>
          <input type="range" id="speedRed" min="1" max="50" value="25" onchange="setSpeed('red', this.value)">
          <label for="speedRed">Lewis Hamilton</label>
          <br>
          <input type="range" id="speedBlue" min="1" max="50" value="25" onchange="setSpeed('blue', this.value)">
          <label for="speedBlue">Max Verstappen</label>
          <br>
          <input type="range" id="speedGreen" min="1" max="50" value="25" onchange="setSpeed('green', this.value)">
          <label for="speedGreen">Charles Leclerc</label>
          <!-- Add more speed controls for other pilots here -->
        </div>
      </div>

      <div class="col-md-6">
        <div class="track" id="raceTrack">
          <div class="car" id="redCar" onmousedown="startDrag(event, 'red')"><span class="car-text">Lewis Hamilton</span></div>
          <div class="car" id="blueCar" onmousedown="startDrag(event, 'blue')"><span class="car-text">Max Verstappen</span></div>
          <div class="car" id="greenCar" onmousedown="startDrag(event, 'green')"><span class="car-text">Charles Leclerc</span></div>
        </div>
      </div>
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
