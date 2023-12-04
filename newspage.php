<?php
$pageTitle = "Race Results";
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
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      color: #333;
    }

    header {
      background-color: #66cccc;
      text-align: center;
      padding: 10px;
    }

    h1 {
      margin: 0;
      color: #fff;
    }

    section {
      margin: 20px;
    }

    .grid-container {
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(5, 1fr);
      justify-content: center;
    }

    .grid-item {
      text-align: center;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: transform 0.2s ease-in-out;
    }

    .grid-item:hover {
      transform: scale(1.05);
    }

    .team-logo, .driver-photo {
      width: 100%;
      max-width: 150px;
      height: auto;
      border: 5px solid #fff;
      border-radius: 10px;
      overflow: hidden;
    }
  </style>
  <title>Formula One News Hub</title>
</head>
<body>
  <header>
    <h1>Formula One News Hub</h1>
  </header>
  
  <section id="byTeam">
    <h2>By Team</h2>
    <div class="grid-container">
      <!-- Team grid with team names -->
      
<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/mercedes.html')">
  <div class="team-logo"><img src="mercedes_logo.png" alt="Mercedes Logo"></div>
  <p>Mercedes</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/Red-Bull-Racing.html')">
  <div class="team-logo"><img src="red_bull_logo.png" alt="Red Bull Logo"></div>
  <p>Red Bull</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/ferrari.html')">
  <div class="team-logo"><img src="ferrari_logo.png" alt="Ferrari Logo"></div>
  <p>Ferrari</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/mclaren.html')">
  <div class="team-logo"><img src="mclaren_logo.png" alt="McLaren Logo"></div>
  <p>McLaren</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/alpine.html')">
  <div class="team-logo"><img src="alpine_logo.png" alt="Alpine Logo"></div>
  <p>Alpine</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/astongmartin.html')">
  <div class="team-logo"><img src="astongmartin_logo.png" alt="Aston Martin Logo"></div>
  <p>Aston Martin</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/alfa-romeo.html')">
  <div class="team-logo"><img src="alfa_romeo_logo.png" alt="Alfa Romeo Logo"></div>
  <p>Alfa Romeo</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/haas.html')">
  <div class="team-logo"><img src="haas_logo.png" alt="Haas Logo"></div>
  <p>Haas</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/williams.html')">
  <div class="team-logo"><img src="williams_logo.png" alt="Williams Logo"></div>
  <p>Williams</p>
</div>

<div class="grid-item" onclick="redirectToWebsite('https://www.formula1.com/en/teams/alpha-tauri.html')">
  <div class="team-logo"><img src="alphatauri_logo.png" alt="AlphaTauri Logo"></div>
  <p>AlphaTauri</p>
</div>

    </div>
  </section>


  <script>
    function redirectToWebsite(url) {
      window.location.href = url;
    }
  </script>
</body>
</html>

<?php
include "view-footer.php";
?>
