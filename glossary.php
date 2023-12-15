<?php
$pageTitle = "F1 Glossary";
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
            min-height: 100vh;
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

        .glossary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        .glossary-entry {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .glossary-entry:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .definition {
            display: none;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #001f3f;
            color: #fff;
            width: 100%;
            border-radius: 0 0 8px 8px;
        }
    </style>
    <title>F1 Glossary</title>
</head>

<body>
    <header>
        <h1>F1 Glossary</h1>
    </header>

    <div class="glossary-grid">

        <div class="glossary-entry" onclick="toggleDefinition('drift')">
            <h2>Drift</h2>
            <p class="definition" id="drift">In motorsports, drift refers to intentionally oversteering, causing the rear tires to lose traction, resulting in a controlled slide. Example: "The driver executed a perfect drift around the hairpin turn."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('downforce')">
            <h2>Downforce</h2>
            <p class="definition" id="downforce">Downforce is the aerodynamic force that pushes a race car toward the track, improving traction and stability. Example: "The new aerodynamic package increased the car's downforce."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('overtake')">
            <h2>Overtake</h2>
            <p class="definition" id="overtake">To overtake is to pass another car during a race, moving ahead in position. Example: "The driver skillfully used DRS to overtake the competitor on the straight."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('slicks')">
            <h2>Slicks</h2>
            <p class="definition" id="slicks">Slick tires have a smooth tread without grooves, providing maximum contact with the road. Example: "The team switched to slicks as the track dried up."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('understeer')">
            <h2>Understeer</h2>
            <p class="definition" id="understeer">Understeer occurs when the front tires lose traction, causing the car to drift wide in a turn. Example: "The setup change helped reduce understeer, improving cornering."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('oversteer')">
            <h2>Oversteer</h2>
            <p class="definition" id="oversteer">Oversteer happens when the rear tires lose traction, causing the back end of the car to slide out. Example: "The driver corrected oversteer with quick steering and throttle control."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('grid-position')">
            <h2>Grid Position</h2>
            <p class="definition" id="grid-position">Grid position refers to a driver's starting position on the grid at the beginning of a race. Example: "The driver qualified in third place, securing a favorable grid position for the race."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('pit-stop')">
            <h2>Pit Stop</h2>
            <p class="definition" id="pit-stop">A pit stop is a scheduled stop in the pit lane for a car to receive service, such as tire changes and refueling. Example: "The team executed a fast pit stop, gaining valuable time."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('pole-position')">
            <h2>Pole Position</h2>
            <p class="definition" id="pole-position">Pole position is the first starting position on the grid, earned by the driver with the fastest qualifying time. Example: "The driver celebrated securing pole position for the Grand Prix."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('safety-car')">
            <h2>Safety Car</h2>
            <p class="definition" id="safety-car">A safety car is deployed during a race to control the pace and allow for the safe clearing of track incidents. Example: "The safety car was on the track after a multiple-car collision."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('driving-line')">
            <h2>Driving Line</h2>
            <p class="definition" id="driving-line">The driving line is the optimal path a driver takes around a racetrack to achieve the fastest lap time. Example: "The driver followed the perfect driving line through the complex corners."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('qualifying')">
            <h2>Qualifying</h2>
            <p class="definition" id="qualifying">Qualifying determines the starting order of drivers based on their lap times. Example: "The team focused on improving the car's performance for the upcoming qualifying session."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('checkered-flag')">
            <h2>Checkered Flag</h2>
            <p class="definition" id="checkered-flag">The checkered flag signals the end of a race, waving as the first car crosses the finish line. Example: "The driver celebrated victory as they crossed the finish line under the checkered flag."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('formation-lap')">
            <h2>Formation Lap</h2>
            <p class="definition" id="formation-lap">The formation lap is a pre-race lap where drivers warm up tires and engines before lining up on the grid. Example: "The driver maintained tire temperature during the formation lap."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('chicane')">
            <h2>Chicane</h2>
            <p class="definition" id="chicane">A chicane is a sequence of tight corners designed to slow down vehicles on a racetrack. Example: "The challenging chicane tested the driver's precision and control."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('fastest-lap')">
            <h2>Fastest Lap</h2>
            <p class="definition" id="fastest-lap">The fastest lap is the quickest lap time recorded by a driver during a race. Example: "The driver set the fastest lap of the race with impressive speed."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('parc-ferme')">
            <h2>Parc Fermé</h2>
            <p class="definition" id="parc-ferme">Parc fermé is a restricted area where cars are held after qualifying and the race for inspection. Example: "The car was impounded in parc fermé for post-race scrutineering."</p>
        </div>

        <div class="glossary-entry" onclick="toggleDefinition('drs')">
            <h2>DRS (Drag Reduction System)</h2>
            <p class="definition" id="drs">DRS is a system that enables a car to reduce aerodynamic drag and increase straight-line speed. Example: "The driver activated DRS to gain an advantage while overtaking."</p>
        </div>


    </div>

    <?php
    include "view-footer.php";
    ?>

    <script>
        function toggleDefinition(termId) {
            var definition = document.getElementById(termId);
            definition.style.display = (definition.style.display === "none" || definition.style.display === "") ? "block" : "none";
        }
    </script>
</body>

</html>

