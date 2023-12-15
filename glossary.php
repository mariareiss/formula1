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

            <?php
            // F1 glossary terms array
            $terms = array(
                array(
                    'title' => 'Aerodynamics',
                    'content' => 'The study of the behavior of air, particularly as it interacts with the surfaces of the F1 car. Aerodynamics plays a crucial role in determining a car\'s speed and handling.'
                ),
                array(
                    'title' => 'Downforce',
                    'content' => 'The aerodynamic force that pushes the F1 car toward the track, increasing tire grip and improving cornering capabilities. Downforce is essential for high-speed stability.'
                ),
                array(
                    'title' => 'DRS (Drag Reduction System)',
                    'content' => 'An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.'
                ),
                array(
                    'title' => 'Hybrid Power Unit',
                    'content' => 'The modern power unit used in F1, consisting of a V6 turbocharged engine and energy recovery systems (ERS). ERS components include the MGU-K and MGU-H.'
                ),
                array(
                    'title' => 'Pit Stop',
                    'content' => 'A scheduled stop during a race where a team changes a car\'s tires, makes adjustments, and refuels if necessary. Pit stops are crucial for strategy and maintenance.'
                ),
                array(
                    'title' => 'Grid Penalty',
                    'content' => 'A penalty imposed on a driver for rule violations or exceeding the allowed number of engine components. Grid penalties result in the driver starting the race from a lower grid position.'
                ),
                array(
                    'title' => 'DRS (Drag Reduction System)',
                    'content' => 'An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.'
                ),
                array(
                    'title' => 'Podium',
                    'content' => 'The raised platform where the top three finishers of a race stand to receive trophies and celebrate. Achieving a podium finish is a significant accomplishment in F1.'
                ),
                array(
                    'title' => 'Formation Lap',
                    'content' => 'The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.'
                ),
                array(
                    'title' => 'Blue Flags',
                    'content' => 'Flags shown to lapped cars to inform them that a faster car is approaching from behind. Lapped cars are expected to yield to faster competitors.'
                ),
                array(
                    'title' => 'Pit Wall',
                    'content' => 'The area in the pit lane where the team\'s management and engineers monitor the race, communicate with the driver, and make strategic decisions.'
                ),
                array(
                    'title' => 'Safety Car',
                    'content' => 'A vehicle deployed during a race to neutralize the competition in case of accidents or unsafe track conditions. The safety car leads the field until the track is clear.'
                ),
                array(
                    'title' => 'Time Penalty',
                    'content' => 'A penalty imposed on a driver for rule violations, such as exceeding track limits or causing avoidable collisions. Time penalties are added to a driver\'s race time.'
                ),
                array(
                    'title' => 'Formation Lap',
                    'content' => 'The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.'
                ),
                array(
                    'title' => 'Chicane',
                    'content' => 'A sequence of tight corners deliberately designed to slow down cars on a straight portion of the track. Chicanes are used to create challenging and technical sections.'
                ),
                array(
                    'title' => 'Pit Crew',
                    'content' => 'The team members responsible for performing pit stops, including tire changes, adjustments, and refueling. Pit crews must work quickly and efficiently.'
                ),
                array(
                    'title' => 'Engine Mapping',
                    'content' => 'The electronic control of an F1 engine\'s performance characteristics. Engine mapping is adjusted to optimize power delivery, fuel efficiency, and overall performance.'
                ),
                array(
                    'title' => 'DNF (Did Not Finish)',
                    'content' => 'A classification given to a driver or team that did not complete the race distance due to mechanical failure, accidents, or other reasons.'
                ),
                array(
                    'title' => 'Pole Position',
                    'content' => 'The grid position at the front of the starting lineup. It is awarded to the driver who sets the fastest qualifying time before the race.'
                ),
                array(
                    'title' => 'Flat Spot',
                    'content' => 'A localized area of excessive wear on a tire caused by heavy braking and wheel locking. Flat spots can affect a car\'s handling and performance.'
                )
            );

            // Loop through each term and generate HTML
            foreach ($terms as $index => $term) {
                echo '<div class="term">';
                echo '<p>' . $term['content'] . '</p>';
                echo '<button class="show-details-btn" onclick="toggleDetails(' . $index . ')">Toggle Definition</button>';
                echo '<div class="term-details hidden" id="term-details-' . $index . '">';
                echo '<p>' . $term['content'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </div>
    </main>

    <script>
        function toggleDetails(index) {
            const termDetails = document.getElementById('term-details-' + index);
            termDetails.classList.toggle('hidden');
        }
    </script>

</body>

</html>
