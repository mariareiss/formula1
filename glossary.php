<?php
$pageTitle = "Glossary";
include "view-header.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>F1 Glossary</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        main {
            margin-top: 20px;
        }

        .glossary-entry {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .definition {
            display: none;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>F1 Glossary</h1>
        </header>

<main>
    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('drift')">Drift</h2>
        <p class="definition" id="drift">In motorsports, drift refers to intentionally oversteering, causing the rear tires to lose traction, resulting in a controlled slide. Example: "The driver executed a perfect drift around the hairpin turn."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('downforce')">Downforce</h2>
        <p class="definition" id="downforce">Downforce is the aerodynamic force that pushes a race car toward the track, improving traction and stability. Example: "The new aerodynamic package increased the car's downforce."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('overtake')">Overtake</h2>
        <p class="definition" id="overtake">To overtake is to pass another car during a race, moving ahead in position. Example: "The driver skillfully used DRS to overtake the competitor on the straight."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('slicks')">Slicks</h2>
        <p class="definition" id="slicks">Slick tires have a smooth tread without grooves, providing maximum contact with the road. Example: "The team switched to slicks as the track dried up."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('understeer')">Understeer</h2>
        <p class="definition" id="understeer">Understeer occurs when the front tires lose traction, causing the car to drift wide in a turn. Example: "The setup change helped reduce understeer, improving cornering."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('oversteer')">Oversteer</h2>
        <p class="definition" id="oversteer">Oversteer happens when the rear tires lose traction, causing the back end of the car to slide out. Example: "The driver corrected oversteer with quick steering and throttle control."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('grid-position')">Grid Position</h2>
        <p class="definition" id="grid-position">Grid position refers to a driver's starting position on the grid at the beginning of a race. Example: "The driver qualified in third place, securing a favorable grid position for the race."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('pit-stop')">Pit Stop</h2>
        <p class="definition" id="pit-stop">A pit stop is a scheduled stop in the pit lane for a car to receive service, such as tire changes and refueling. Example: "The team executed a fast pit stop, gaining valuable time."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('pole-position')">Pole Position</h2>
        <p class="definition" id="pole-position">Pole position is the first starting position on the grid, earned by the driver with the fastest qualifying time. Example: "The driver celebrated securing pole position for the Grand Prix."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('safety-car')">Safety Car</h2>
        <p class="definition" id="safety-car">A safety car is deployed during a race to control the pace and allow for the safe clearing of track incidents. Example: "The safety car was on the track after a multiple-car collision."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('driving-line')">Driving Line</h2>
        <p class="definition" id="driving-line">The driving line is the optimal path a driver takes around a racetrack to achieve the fastest lap time. Example: "The driver followed the perfect driving line through the complex corners."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('qualifying')">Qualifying</h2>
        <p class="definition" id="qualifying">Qualifying determines the starting order of drivers based on their lap times. Example: "The team focused on improving the car's performance for the upcoming qualifying session."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('checkered-flag')">Checkered Flag</h2>
        <p class="definition" id="checkered-flag">The checkered flag signals the end of a race, waving as the first car crosses the finish line. Example: "The driver celebrated victory as they crossed the finish line under the checkered flag."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Formation Lap</h2>
        <p class="definition" id="formation-lap">The formation lap is a pre-race lap where drivers warm up tires and engines before lining up on the grid. Example: "The driver maintained tire temperature during the formation lap."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('chicane')">Chicane</h2>
        <p class="definition" id="chicane">A chicane is a sequence of tight corners designed to slow down vehicles on a racetrack. Example: "The challenging chicane tested the driver's precision and control."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('fastest-lap')">Fastest Lap</h2>
        <p class="definition" id="fastest-lap">The fastest lap is the quickest lap time recorded by a driver during a race. Example: "The driver set the fastest lap of the race with impressive speed."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('parc-ferme')">Parc Fermé</h2>
        <p class="definition" id="parc-ferme">Parc fermé is a restricted area where cars are held after qualifying and the race for inspection. Example: "The car was impounded in parc fermé for post-race scrutineering."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('drs')">DRS (Drag Reduction System)</h2>
        <p class="definition" id="drs">DRS is a system that enables a car to reduce aerodynamic drag and increase straight-line speed. Example: "The driver activated DRS to gain an advantage while overtaking."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('blue-flag')">Blue Flag</h2>
        <p class="definition" id="blue-flag">A blue flag is shown to lapped cars to indicate they must allow faster cars to pass. Example: "The driver obeyed the blue flag and moved aside for the leaders."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Paddock</h2>
        <p class="definition" id="paddock">The paddock is the area at a racetrack where teams set up temporary facilities, including team garages and hospitality units. Example: "Fans gathered in the paddock for a chance to see their favorite drivers."</p>
    </div>
    
    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('grid-penalty')">Grid Penalty</h2>
        <p class="definition" id="grid-penalty">A grid penalty is a penalty imposed on a driver, requiring them to start the race from a lower grid position. Example: "The driver received a grid penalty for a gearbox change."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('dirty-air')">Dirty Air</h2>
        <p class="definition" id="dirty-air">Dirty air is turbulent air behind another car, negatively affecting the aerodynamics and performance of the following car. Example: "The driver struggled in the dirty air, making it difficult to close the gap."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('slicks')">Marbles</h2>
        <p class="definition" id="marbles">Marbles are small rubber bits that accumulate off the racing line, reducing traction for cars driving over them. Example: "The driver avoided the marbles to maintain optimal grip."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Team Orders</h2>
        <p class="definition" id="team-orders">Team orders are instructions given by a team to its drivers to prioritize one driver over another during a race. Example: "The team issued team orders to secure maximum points for the championship."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Fuel Saving</h2>
        <p class="definition" id="fuel-saving">Fuel saving is a strategic approach where a driver conserves fuel during a race to reach the finish line with the allotted fuel quantity. Example: "The team advised fuel saving to ensure the car completed the race."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Pit Wall</h2>
        <p class="definition" id="pit-wall">The pit wall is the wall separating the pit lane from the track, where teams set up monitors and strategists to communicate with drivers. Example: "The team watched nervously from the pit wall as the race unfolded."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Curbing</h2>
        <p class="definition" id="curbing">Curbing refers to raised strips at the edge of the track, often used to define track limits and discourage drivers from going off-track. Example: "The driver skillfully rode the curbing to take the inside line."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Race Control</h2>
        <p class="definition" id="race-control">Race control is the central command where race officials monitor and manage the race, making decisions on incidents and safety. Example: "Race control issued a warning for track limits violations."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Tyre Degradation</h2>
        <p class="definition" id="tyre-degradation">Tyre degradation is the gradual loss of tyre performance over the course of a race due to wear and heat. Example: "Managing tyre degradation is crucial for a successful race strategy."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Track Limits</h2>
        <p class="definition" id="track-limits">Track limits refer to the boundaries of the racetrack, and exceeding these limits may result in penalties. Example: "Drivers received warnings for consistently breaching track limits."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Racing Line</h2>
        <p class="definition" id="racing-line">The racing line is the fastest and most efficient path around a corner or through a section of the track. Example: "Following the optimal racing line is key to achieving a quick lap time."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Eau Rouge</h2>
        <p class="definition" id="eau-rouge">Eau Rouge is a famous and challenging high-speed corner at the Circuit de Spa-Francorchamps in Belgium. Example: "Drivers approach Eau Rouge flat out, navigating the elevation change."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Tech Talk</h2>
        <p class="definition" id="tech-talk">Tech talk refers to discussions and analysis related to the technical aspects of the cars, engines, and innovations in Formula 1. Example: "Fans enjoy engaging in tech talk to understand the engineering behind the sport."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Pole Sitter</h2>
        <p class="definition" id="pole-sitter">The pole sitter is the driver who starts the race from the pole position, having achieved the fastest qualifying time. Example: "The pole sitter led the pack into the first corner after the lights went out."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Jump Start</h2>
        <p class="definition" id="jump-start">A jump start occurs when a car moves before the race officially begins, resulting in penalties. Example: "The driver received a time penalty for a jump start."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Midfield</h2>
        <p class="definition" id="midfield">The midfield refers to the group of teams and drivers who compete in the middle of the grid and standings. Example: "Midfield battles often provide intense and closely contested racing."</p>
    </div>

    <div class="glossary-entry">
        <h2 onclick="toggleDefinition('formation-lap')">Flat Out</h2>
        <p class="definition" id="flat-out">Driving flat out means driving at maximum speed without lifting off the throttle. Example: "The driver kept the pedal to the metal, going flat out through the straight."</p>
    </div>
</main>

   
       
    <script>
        function toggleDefinition(termId) {
            var definition = document.getElementById(termId);
            if (definition.style.display === "none") {
                definition.style.display = "block";
            } else {
                definition.style.display = "none";
            }
        }
    </script>
</body>

</html>

<?php
include "view-footer.php";
?>
