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
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .term {
            cursor: pointer;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .term:hover {
            background-color: #ddd;
        }

        .term-details {
            display: none;
            grid-column: span 2;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>F1 Glossary</h1>
    </header>

    <main>
        <?php
        // F1 glossary terms array
        $terms = array(
            'Aerodynamics', 'Downforce', 'DRS (Drag Reduction System)', 'Hybrid Power Unit', 'Pit Stop',
            'Grid Penalty', 'DRS (Drag Reduction System)', 'Podium', 'Formation Lap', 'Blue Flags',
            'Pit Wall', 'Safety Car', 'Time Penalty', 'Chicane', 'Pit Crew',
            'Engine Mapping', 'DNF (Did Not Finish)', 'Pole Position', 'Flat Spot'
        );

        // Loop through each term and generate HTML
        foreach ($terms as $index => $term) {
            echo '<div class="term" onclick="toggleDetails(' . $index . ')">' . $term . '</div>';
        }
        ?>

        <div class="term-details" id="term-details">
            <!-- Definition content will be dynamically added here -->
        </div>

    </main>

    <script>
        function toggleDetails(index) {
            const termDetails = document.getElementById('term-details');
            termDetails.innerHTML = '<p>' + getTermDefinition(index) + '</p>';
            termDetails.style.display = 'block';
        }

        function getTermDefinition(index) {
            // F1 glossary definitions array
            const definitions = [
                'The study of the behavior of air, particularly as it interacts with the surfaces of the F1 car. Aerodynamics plays a crucial role in determining a car\'s speed and handling.',
                'The aerodynamic force that pushes the F1 car toward the track, increasing tire grip and improving cornering capabilities. Downforce is essential for high-speed stability.',
                'An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.',
                'The modern power unit used in F1, consisting of a V6 turbocharged engine and energy recovery systems (ERS). ERS components include the MGU-K and MGU-H.',
                'A scheduled stop during a race where a team changes a car\'s tires, makes adjustments, and refuels if necessary. Pit stops are crucial for strategy and maintenance.',
                'A penalty imposed on a driver for rule violations or exceeding the allowed number of engine components. Grid penalties result in the driver starting the race from a lower grid position.',
                'An adjustable flap on the rear wing that can be opened to reduce aerodynamic drag and increase straight-line speed. DRS is used in designated zones during races.',
                'The raised platform where the top three finishers of a race stand to receive trophies and celebrate. Achieving a podium finish is a significant accomplishment in F1.',
                'The pre-race lap where F1 cars circulate the track to warm up tires and prepare for the race start. Drivers follow a set formation behind the safety car.',
                'Flags shown to lapped cars to inform them that a faster car is approaching from behind. Lapped cars are expected to yield to faster competitors.',
                'The area in the pit lane where the team\'s management and engineers monitor the race, communicate with the driver, and make strategic decisions.',
                'A vehicle deployed during a race to neutralize the competition in case of accidents or unsafe track conditions. The safety car leads the field until the track is clear.',
                'A penalty imposed on a driver for rule violations, such as exceeding track limits or causing avoidable collisions. Time penalties are added to a driver\'s race time.',
                'A sequence of tight corners deliberately designed to slow down cars on a straight portion of the track. Chicanes are used to create challenging and technical sections.',
                'The team members responsible for performing pit stops, including tire changes, adjustments, and refueling. Pit crews must work quickly and efficiently.',
                'The electronic control of an F1 engine\'s performance characteristics. Engine mapping is adjusted to optimize power delivery, fuel efficiency, and overall performance.',
                'A classification given to a driver or team that did not complete the race distance due to mechanical failure, accidents, or other reasons.',
                'The grid position at the front of the starting lineup. It is awarded to the driver who sets the fastest qualifying time before the race.',
                'A localized area of excessive wear on a tire caused by heavy braking and wheel locking. Flat spots can affect a car\'s handling and performance.'
            ];

            return definitions[index];
        }
    </script>

</body>

</html>
