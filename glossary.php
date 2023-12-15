<?php
$pageTitle = "Glossary";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Glossary</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .term {
            margin-bottom: 20px;
        }

        .term-details {
            display: none;
        }

        .show-details-btn {
            cursor: pointer;
            color: #007BFF;
            text-decoration: underline;
        }

        .show-details-btn:hover {
            color: #0056b3;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border-radius: 0 0 8px 8px;
        }

         .term {
            margin-bottom: 20px;
        }

        .show-details-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .term-details {
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 5px;
            margin-top: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <header>
        <h1>F1 Glossary</h1>
    </header>

<main>
    <div class="section">
        <h2>F1 Glossary</h2>

        <!-- Term 1 -->
        <div class="term">
            <p>Aerodynamics: The study of the behavior of air, particularly as it interacts with the surfaces of the F1 car. Aerodynamics plays a crucial role in determining a car's speed and handling.</p>
            <button class="show-details-btn" onclick="toggleDetails('aerodynamics')">Toggle Definition</button>
            <div class="term-details hidden" id="aerodynamics-details">
                <p>Aerodynamics in F1 involves designing components like wings, diffusers, and bargeboards to optimize airflow and enhance performance.</p>
            </div>
        </div>

        <!-- Term 2 -->
        <div class="term">
            <p>Downforce: The aerodynamic force that pushes the F1 car toward the track, increasing tire grip and improving cornering capabilities. Downforce is essential for high-speed stability.</p>
            <button class="show-details-btn" onclick="toggleDetails('downforce')">Toggle Definition</button>
            <div class="term-details hidden" id="downforce-details">
                <p>Teams strive to maximize downforce while minimizing drag to achieve a balance that suits different track conditions.</p>
            </div>
        </div>

        <!-- Term 3 -->
        <div class="term">
            <p>DRS (Drag Reduction System): An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.</p>
            <button class="show-details-btn" onclick="toggleDetails('drs')">Toggle Definition</button>
            <div class="term-details hidden" id="drs-details">
                <p>DRS helps facilitate overtaking by making it easier for a car to catch up and pass its competitor on a straight portion of the track.</p>
            </div>
        </div>

        <!-- Term 4 -->
        <div class="term">
            <p>Hybrid Power Unit: The modern power unit used in F1, consisting of a V6 turbocharged engine and energy recovery systems (ERS). ERS components include the MGU-K and MGU-H.</p>
            <button class="show-details-btn" onclick="toggleDetails('hybrid-power-unit')">Toggle Definition</button>
            <div class="term-details hidden" id="hybrid-power-unit-details">
                <p>The hybrid power unit enhances fuel efficiency and performance by recovering and reusing energy generated during braking and from exhaust heat.</p>
            </div>
        </div>

        <!-- Term 5 -->
        <div class="term">
            <p>Pit Stop: A scheduled stop during a race where a team changes a car's tires, makes adjustments, and refuels if necessary. Pit stops are crucial for strategy and maintenance.</p>
            <button class="show-details-btn" onclick="toggleDetails('pit-stop')">Toggle Definition</button>
            <div class="term-details hidden" id="pit-stop-details">
                <p>Efficient pit stops can significantly impact a team's race performance and position.</p>
            </div>
        </div>

        <!-- Term 6 -->
        <div class="term">
            <p>Grid Penalty: A penalty imposed on a driver for rule violations or exceeding the allowed number of engine components. Grid penalties result in the driver starting the race from a lower grid position.</p>
            <button class="show-details-btn" onclick="toggleDetails('grid-penalty')">Toggle Definition</button>
            <div class="term-details hidden" id="grid-penalty-details">
                <p>Grid penalties are a consequence of technical infringements and can affect a driver's race strategy.</p>
            </div>
        </div>

        <!-- Term 7 -->
        <div class="term">
            <p>DRS (Drag Reduction System): An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.</p>
            <button class="show-details-btn" onclick="toggleDetails('drs')">Toggle Definition</button>
            <div class="term-details hidden" id="drs-details">
                <p>DRS helps facilitate overtaking by making it easier for a car to catch up and pass its competitor on a straight portion of the track.</p>
            </div>
        </div>

        <!-- Term 8 -->
        <div class="term">
            <p>Podium: The raised platform where the top three finishers of a race stand to receive trophies and celebrate. Achieving a podium finish is a significant accomplishment in F1.</p>
            <button class="show-details-btn" onclick="toggleDetails('podium')">Toggle Definition</button>
            <div class="term-details hidden" id="podium-details">
                <p>Standing on the podium is a moment of pride and recognition for drivers and their teams.</p>
            </div>
        </div>

        <!-- Term 9 -->
        <div class="term">
            <p>Formation Lap: The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.</p>
            <button class="show-details-btn" onclick="toggleDetails('formation-lap')">Toggle Definition</button>
            <div class="term-details hidden" id="formation-lap-details">
                <p>The formation lap allows teams to assess track conditions and ensures a fair and safe race start.</p>
            </div>
        </div>

        <!-- Term 10 -->
        <div class="term">
            <p>Blue Flags: Flags shown to lapped cars to inform them that a faster car is approaching from behind. Lapped cars are expected to yield to faster competitors.</p>
            <button class="show-details-btn" onclick="toggleDetails('blue-flags')">Toggle Definition</button>
            <div class="term-details hidden" id="blue-flags-details">
                <p>Blue flags help prevent interference with the battle for position among leading cars.</p>
            </div>
        </div>

        <!-- Term 11 -->
        <div class="term">
            <p>Pit Wall: The area in the pit lane where the team's management and engineers monitor the race, communicate with the driver, and make strategic decisions.</p>
            <button class="show-details-btn" onclick="toggleDetails('pit-wall')">Toggle Definition</button>
            <div class="term-details hidden" id="pit-wall-details">
                <p>The pit wall is a nerve center for race strategy and communication.</p>
            </div>
        </div>

        <!-- Term 12 -->
        <div class="term">
            <p>Safety Car: A vehicle deployed during a race to neutralize the competition in case of accidents or unsafe track conditions. The safety car leads the field until the track is clear.</p>
            <button class="show-details-btn" onclick="toggleDetails('safety-car')">Toggle Definition</button>
            <div class="term-details hidden" id="safety-car-details">
                <p>The presence of the safety car often influences race strategies and creates strategic challenges for teams.</p>
            </div>
        </div>

        <!-- Term 13 -->
        <div class="term">
            <p>Time Penalty: A penalty imposed on a driver for rule violations, such as exceeding track limits or causing avoidable collisions. Time penalties are added to a driver's race time.</p>
            <button class="show-details-btn" onclick="toggleDetails('time-penalty')">Toggle Definition</button>
            <div class="term-details hidden" id="time-penalty-details">
                <p>Time penalties impact a driver's final race position and can alter the race outcome.</p>
            </div>
        </div>

        <!-- Term 14 -->
        <div class="term">
            <p>Formation Lap: The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.</p>
            <button class="show-details-btn" onclick="toggleDetails('formation-lap')">Toggle Definition</button>
            <div class="term-details hidden" id="formation-lap-details">
                <p>The formation lap allows teams to assess track conditions and ensures a fair and safe race start.</p>
            </div>
        </div>

        <!-- Term 15 -->
        <div class="term">
            <p>Chicane: A sequence of tight corners deliberately designed to slow down cars on a straight portion of the track. Chicanes are used to create challenging and technical sections.</p>
            <button class="show-details-btn" onclick="toggleDetails('chicane')">Toggle Definition</button>
            <div class="term-details hidden" id="chicane-details">
                <p>Chicanes test driver skill and contribute to the overall excitement of a race.</p>
            </div>
        </div>

        <!-- Term 16 -->
        <div class="term">
            <p>Pit Crew: The team members responsible for performing pit stops, including tire changes, adjustments, and refueling. Pit crews must work quickly and efficiently.</p>
            <button class="show-details-btn" onclick="toggleDetails('pit-crew')">Toggle Definition</button>
            <div class="term-details hidden" id="pit-crew-details">
                <p>Highly trained pit crews are crucial for minimizing time spent in the pits and maximizing a team's race strategy.</p>
            </div>
        </div>

        <!-- Term 17 -->
        <div class="term">
            <p>Engine Mapping: The electronic control of an F1 engine's performance characteristics. Engine mapping is adjusted to optimize power delivery, fuel efficiency, and overall performance.</p>
            <button class="show-details-btn" onclick="toggleDetails('engine-mapping')">Toggle Definition</button>
            <div class="term-details hidden" id="engine-mapping-details">
                <p>Teams continuously fine-tune engine mapping to adapt to different track conditions and racing scenarios.</p>
            </div>
        </div>

        <!-- Term 18 -->
        <div class="term">
            <p>DNF (Did Not Finish): A classification given to a driver or team that did not complete the race distance. DNF may result from mechanical failure, accidents, or other issues.</p>
            <button class="show-details-btn" onclick="toggleDetails('dnf')">Toggle Definition</button>
            <div class="term-details hidden" id="dnf-details">
                <p>DNF affects a team's championship points and can have implications for the overall standings.</p>
            </div>
        </div>

        <!-- Term 19 -->
        <div class="term">
            <p>Graining: A tire wear phenomenon characterized by the formation of small rubber balls on the tire surface. Graining affects grip and handling, particularly in cooler conditions.</p>
            <button class="show-details-btn" onclick="toggleDetails('graining')">Toggle Definition</button>
            <div class="term-details hidden" id="graining-details">
                <p>Managing graining is essential for optimizing tire performance during a race.</p>
            </div>
        </div>

        <!-- Term 20 -->
        <div class="term">
            <p>Overtaking: The act of one car successfully passing another on the track. Overtaking is a strategic and skillful maneuver that can significantly impact race outcomes.</p>
            <button class="show-details-btn" onclick="toggleDetails('overtaking')">Toggle Definition</button>
            <div class="term-details hidden" id="overtaking-details">
                <p>Effective overtaking requires careful planning, timing, and understanding of the competitor's strengths and weaknesses.</p>
            </div>
        </div>

    </div>

    <script>
        function toggleDetails(termId) {
            const termDetails = document.getElementById(termId + '-details');
            termDetails.classList.toggle('hidden');
        }
    </script>

</main>

</body>

</html>
