<?php
$pageTitle = "Game";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formula 1 Race Simulation</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
      color: #333;
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
      width: 600px;
      height: 400px;
      border: 1px solid #ccc;
      position: relative;
      margin: 20px auto;
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
      color: #000;
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

    /* Styling for checkboxes and labels */
    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }

    input[type="checkbox"] {
      display: none;
    }

    label {
      display: inline-block;
      padding: 8px 16px;
      background-color: #333;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="checkbox"]:checked + label {
      background-color: #0056b3;
    }

    input[type="range"] {
      width: 80%;
      margin: 5px 0;
    }
  </style>
</head>
<body>

  <div>
  <?php
    // Include view-header.php in its own container
    echo '<div class="header-container">';
    include "view-header.php";
    echo '</div>';
  ?>

<h1>Formula 1 Race Simulation</h1>

<div class="container">
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
    <label for="speedRed">Hamilton</label>
    <br>
    <input type="range" id="speedBlue" min="1" max="50" value="25" onchange="setSpeed('blue', this.value)">
    <label for="speedBlue">Verstappen</label>
    <br>
    <input type="range" id="speedGreen" min="1" max="50" value="25" onchange="setSpeed('green', this.value)">
    <label for="speedGreen">Leclerc</label>
    <!-- Add more speed controls for other pilots here -->
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

<script>
  let selectedPilot = '';

  function selectPilot(color, isChecked) {
    if (isChecked) {
      selectedPilot = color;
    } else {
      selectedPilot = ''; // Unselect if checkbox is unchecked
    }
  }

  function setSpeed(color, value) {
    pilots[color].speed = value;
  }

  let pilots = {
    'red': { 'name': 'Lewis Hamilton', 'speed': 25, 'intervalId': null },
    'blue': { 'name': 'Max Verstappen', 'speed': 25, 'intervalId': null },
    'green': { 'name': 'Charles Leclerc', 'speed': 25, 'intervalId': null }
    // Add more pilots here
  };

  function startRace() {
    if (!selectedPilot) {
      alert('Please select a pilot before starting the race!');
      return;
    }

    const raceTrack = document.getElementById('raceTrack');
    const redCar = document.getElementById('redCar');
    const blueCar = document.getElementById('blueCar');
    const greenCar = document.getElementById('greenCar');

    redCar.style.backgroundColor = 'red';
    blueCar.style.backgroundColor = 'blue';
    greenCar.style.backgroundColor = 'green';

    const distance = 550;

    const moveIntervalRed = setInterval(() => {
      const currentPositionRed = parseInt(redCar.style.left, 10) || 0;
      const newPositionRed = currentPositionRed + pilots['red'].speed / 2;

      if (newPositionRed >= distance) {
        clearInterval(moveIntervalRed);
        redCar.style.left = `${distance}px`;
      } else {
        redCar.style.left = `${newPositionRed}px`;
      }
    }, 100);

    const moveIntervalBlue = setInterval(() => {
      const currentPositionBlue = parseInt(blueCar.style.left, 10) || 0;
      const newPositionBlue = currentPositionBlue + pilots['blue'].speed / 2;

      if (newPositionBlue >= distance) {
        clearInterval(moveIntervalBlue);
        blueCar.style.left = `${distance}px`;
      } else {
        blueCar.style.left = `${newPositionBlue}px`;
      }
    }, 100);

    const moveIntervalGreen = setInterval(() => {
      const currentPositionGreen = parseInt(greenCar.style.left, 10) || 0;
      const newPositionGreen = currentPositionGreen + pilots['green'].speed / 2;

      if (newPositionGreen >= distance) {
        clearInterval(moveIntervalGreen);
        greenCar.style.left = `${distance}px`;
      } else {
        greenCar.style.left = `${newPositionGreen}px`;
      }
    }, 100);

    pilots['red'].intervalId = moveIntervalRed;
    pilots['blue'].intervalId = moveIntervalBlue;
    pilots['green'].intervalId = moveIntervalGreen;
  }

  function stopRace() {
    clearInterval(pilots['red'].intervalId);
    clearInterval(pilots['blue'].intervalId);
    clearInterval(pilots['green'].intervalId);
  }

  function restartRace() {
    stopRace();
    const redCar = document.getElementById('redCar');
    const blueCar = document.getElementById('blueCar');
    const greenCar = document.getElementById('greenCar');
    redCar.style.left = '0px';
    blueCar.style.left = '0px';
    greenCar.style.left = '0px';
  }

  let isDragging = false;
  let offsetX = 0;

  function startDrag(event, color) {
    isDragging = true;
    offsetX = event.clientX - parseInt(document.getElementById(color + 'Car').style.left || 0);
    document.addEventListener('mousemove', e => moveCar(e, color));
    document.addEventListener('mouseup', stopDrag);
  }

  function moveCar(event, color) {
    if (isDragging) {
      const car = document.getElementById(color + 'Car');
      car.style.left = `${event.clientX - offsetX}px`;
    }
  }

  function stopDrag() {
    isDragging = false;
    document.removeEventListener('mousemove', moveCar);
    document.removeEventListener('mouseup', stopDrag);
  }
</script>

</body>
</html>

<?php
include "view-footer.php";
?>
