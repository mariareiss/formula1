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
            background-color: #001f3f;
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
            grid-template-columns: repeat(1, 1fr);
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
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 5px;
            margin-top: 10px;
        }

        .show-details-btn {
            cursor: pointer;
            color: #007BFF;
            text-decoration: underline;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .show-details-btn:hover {
            color: #0056b3;
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
                <button class="show-details-btn" data-target="aerodynamics-details">Toggle Definition</button>
                <div class="term-details hidden" id="aerodynamics-details">
                    <p>Aerodynamics in F1 involves designing components like wings, diffusers, and bargeboards to optimize airflow and enhance performance.</p>
                </div>
            </div>

            <!-- Term 2 -->
            <div class="term">
                <p>Downforce: The aerodynamic force that pushes the F1 car toward the track, increasing tire grip and improving cornering capabilities. Downforce is essential for high-speed stability.</p>
                <button class="show-details-btn" data-target="downforce-details">Toggle Definition</button>
                <div class="term-details hidden" id="downforce-details">
                    <p>Teams strive to maximize downforce while minimizing drag to achieve a balance that suits different track conditions.</p>
                </div>
            </div>

            <!-- Term 3 -->
            <div class="term">
                <p>DRS (Drag Reduction System): An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.</p>
                <button class="show-details-btn" data-target="drs-details">Toggle Definition</button>
                <div class="term-details hidden" id="drs-details">
                    <p>DRS helps facilitate overtaking by making it easier for a car to catch up and pass its competitor on a straight portion of the track.</p>
                </div>
            </div>

            <!-- Term 4 -->
            <div class="term">
                <p>Hybrid Power Unit: The modern power unit used in F1, consisting of a V6 turbocharged engine and energy recovery systems (ERS). ERS components include the MGU-K and MGU-H.</p>
                <button class="show-details-btn" data-target="hybrid-power-unit-details">Toggle Definition</button>
                <div class="term-details hidden" id="hybrid-power-unit-details">
                    <p>The hybrid power unit enhances fuel efficiency and performance by recovering and reusing energy generated during braking and from exhaust heat.</p>
                </div>
            </div>

            <!-- Term 5 -->
            <div class="term">
                <p>Pit Stop: A scheduled stop during a race where a team changes a car's tires, makes adjustments, and refuels if necessary. Pit stops are crucial for strategy and maintenance.</p>
                <button class="show-details-btn" data-target="pit-stop-details">Toggle Definition</button>
                <div class="term-details hidden" id="pit-stop-details">
                    <p>Efficient pit stops can significantly impact a team's race performance and position.</p>
                </div>
            </div>

            <!-- Term 6 -->
            <div class="term">
                <p>Grid Penalty: A penalty imposed on a driver for rule violations or exceeding the allowed number of engine components. Grid penalties result in the driver starting the race from a lower grid position.</p>
                <button class="show-details-btn" data-target="grid-penalty-details">Toggle Definition</button>
                <div class="term-details hidden" id="grid-penalty-details">
                    <p>Grid penalties are a consequence of technical infringements and can affect a driver's race strategy.</p>
                </div>
            </div>

            <!-- Term 7 -->
            <div class="term">
                <p>DRS (Drag Reduction System): An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.</p>
                <button class="show-details-btn" data-target="drs-details-2">Toggle Definition</button>
                <div class="term-details hidden" id="drs-details-2">
                    <p>DRS helps facilitate overtaking by making it easier for a car to catch up and pass its competitor on a straight portion of the track.</p>
                </div>
            </div>

            <!-- Term 8 -->
            <div class="term">
                <p>Podium: The raised platform where the top three finishers of a race stand to receive trophies and celebrate. Achieving a podium finish is a significant accomplishment in F1.</p>
                <button class="show-details-btn" data-target="podium-details">Toggle Definition</button>
                <div class="term-details hidden" id="podium-details">
                    <p>Standing on the podium is a moment of pride and recognition for drivers and their teams.</p>
                </div>
            </div>

            <!-- Term 9 -->
            <div class="term">
                <p>Formation Lap: The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.</p>
                <button class="show-details-btn" data-target="formation-lap-details">Toggle Definition</button>
                <div class="term-details hidden" id="formation-lap-details">
                    <p>The formation lap allows teams to assess track conditions and ensures a fair and safe race start.</p>
                </div>
            </div>

            <!-- Term 10 -->
            <div class="term">
                <p>Blue Flags: Flags shown to lapped cars to inform them that a faster car is approaching from behind. Lapped cars are expected to yield to faster competitors.</p>
                <button class="show-details-btn" data-target="blue-flags-details">Toggle Definition</button>
                <div class="term-details hidden" id="blue-flags-details">
                    <p>Blue flags help prevent interference with the battle for position among leading cars.</p>
                </div>
            </div>

            <!-- Term 11 -->
            <div class="term">
                <p>Pit Wall: The area in the pit lane where the team's management and engineers monitor the race, communicate with the driver, and make strategic decisions.</p>
                <button class="show-details-btn" data-target="pit-wall-details">Toggle Definition</button>
                <div class="term-details hidden" id="pit-wall-details">
                    <p>The pit wall is a nerve center for race strategy and communication.</p>
                </div>
            </div>

            <!-- Term 12 -->
            <div class="term">
                <p>Safety Car: A vehicle deployed during a race to neutralize the competition in case of accidents or unsafe track conditions. The safety car leads the field until the track is clear.</p>
                <button class="show-details-btn" data-target="safety-car-details">Toggle Definition</button>
                <div class="term-details hidden" id="safety-car-details">
                    <p>The presence of the safety car often influences race strategies and creates strategic challenges for teams.</p>
                </div>
            </div>

            <!-- Term 13 -->
            <div class="term">
                <p>Time Penalty: A penalty imposed on a driver for rule violations, such as exceeding track limits or causing avoidable collisions. Time penalties are added to a driver's race time.</p>
                <button class="show-details-btn" data-target="time-penalty-details">Toggle Definition</button>
                <div class="term-details hidden" id="time-penalty-details">
                                        <p>Time penalties impact a driver's final race position and can influence the overall championship standings.</p>
                </div>
            </div>

            <!-- Term 14 -->
            <div class="term">
                <p>Chicane: A sequence of tight corners in alternating directions, designed to slow down cars and create a technical challenge. Chicanes are often used to modify and add complexity to a race circuit.</p>
                <button class="show-details-btn" data-target="chicane-details">Toggle Definition</button>
                <div class="term-details hidden" id="chicane-details">
                    <p>Chicanes test a driver's skill in rapidly changing directions and are common features in street circuits and some permanent tracks.</p>
                </div>
            </div>

            <!-- Term 15 -->
            <div class="term">
                <p>Formation Lap: The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.</p>
                <button class="show-details-btn" data-target="formation-lap-details-2">Toggle Definition</button>
                <div class="term-details hidden" id="formation-lap-details-2">
                    <p>The formation lap allows teams to assess track conditions and ensures a fair and safe race start.</p>
                </div>
            </div>

            <!-- Term 16 -->
            <div class="term">
                <p>Graining: The buildup of rubber on a car's tires, affecting grip and performance. Graining is common in cooler conditions and can be managed through tire strategy.</p>
                <button class="show-details-btn" data-target="graining-details">Toggle Definition</button>
                <div class="term-details hidden" id="graining-details">
                    <p>Teams monitor tire graining and may adjust pit stop strategies to address its impact on a car's handling.</p>
                </div>
            </div>

            <!-- Term 17 -->
            <div class="term">
                <p>Flat Spot: A localized area of a tire that has been worn down due to skidding or locking under heavy braking. Flat spots can lead to vibrations and affect a car's performance.</p>
                <button class="show-details-btn" data-target="flat-spot-details">Toggle Definition</button>
                <div class="term-details hidden" id="flat-spot-details">
                    <p>Drivers aim to avoid flat spots, as they can compromise the balance of the car and lead to additional pit stops for tire replacement.</p>
                </div>
            </div>

            <!-- Term 18 -->
            <div class="term">
                <p>Parc Fermé: The secure area where cars are taken after qualifying and the race for inspection. Teams are restricted in making changes to the car while in parc fermé.</p>
                <button class="show-details-btn" data-target="parc-ferme-details">Toggle Definition</button>
                <div class="term-details hidden" id="parc-ferme-details">
                    <p>Parc fermé regulations aim to ensure fair competition and prevent teams from making significant performance-enhancing changes outside of designated windows.</p>
                </div>
            </div>

            <!-- Term 19 -->
            <div class="term">
                <p>Understeer: A handling condition where the front tires lose grip, causing the car to have reduced responsiveness to steering input. Understeer is often associated with a "pushing" feeling in the front end.</p>
                <button class="show-details-btn" data-target="understeer-details">Toggle Definition</button>
                <div class="term-details hidden" id="understeer-details">
                    <p>Teams may use setup adjustments to address understeer and achieve a balanced and responsive car.</p>
                </div>
            </div>

            <!-- Term 20 -->
            <div class="term">
                <p>Oversteer: A handling condition where the rear tires lose grip, causing the rear end of the car to slide or fishtail. Oversteer is often associated with a "loose" feeling in the rear.</p>
                <button class="show-details-btn" data-target="oversteer-details">Toggle Definition</button>
                <div class="term-details hidden" id="oversteer-details">
                    <p>Drivers may manage oversteer through skillful throttle and steering control, and teams can make setup adjustments to balance the car's handling.</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.show-details-btn');
            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    const targetId = this.getAttribute('data-target');
                    const termDetails = document.getElementById(targetId);
                    termDetails.classList.toggle('hidden');
                });
            });
        });
    </script>

</body>

</html>

