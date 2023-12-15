<?php
$pageTitle = "Insights";
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
            min-height: 0vh;
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

        .insights-container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        .dropdown {
            margin-bottom: 20px;
        }

        .dropdown select {
            padding: 10px;
            font-size: 16px;
        }

        .analysis-content {
            text-align: justify;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
    <title>F1 Insights</title>
</head>

<body>
    <header>
        <h1>F1 Insights</h1>
    </header>

    <div class="insights-container">
        <div class="dropdown">
            <label for="insights-topic">Select a Topic:</label>
            <select id="insights-topic" onchange="changeInsight()">
                <option value="car-components">Car Components</option>
                <option value="strategies">Strategies</option>
                <option value="races">Race Circuits</option>
                <option value="technology">Technology Innovations</option>
                <option value="teams">F1 Teams</option>
            </select>
        </div>

        <div class="analysis-content" id="car-components-content">
            <h2>Car Components in Formula 1</h2>
            <p>Formula 1 cars are intricate machines with various components that contribute to their performance. Here are some key components:</p>
            <ul>
                <li><strong>Chassis:</strong> The main structure of the car, providing support and housing various components.</li>
                <li><strong>Power Unit:</strong> Includes the engine, energy recovery systems, and hybrid components.</li>
                <li><strong>Aerodynamics Package:</strong> Wings, diffusers, and bargeboards that optimize airflow for speed and handling.</li>
                <li><strong>Suspension System:</strong> Components that connect the wheels to the chassis, affecting ride and handling.</li>
                <li><strong>Braking System:</strong> Discs, calipers, and pads that control the car's speed and stability.</li>
            </ul>
        </div>

        <div class="analysis-content" id="strategies-content" style="display: none;">
            <h2>Strategies in Formula 1</h2>
            <p>Teams in Formula 1 employ various strategies to gain a competitive edge during races. Here are some common strategies:</p>
            <ul>
                <li><strong>Pit Stop Strategies:</strong> Timing and frequency of pit stops for tire changes, fueling, and adjustments.</li>
                <li><strong>Tire Management:</strong> Strategies to preserve tire life and optimize grip throughout the race.</li>
                <li><strong>Fuel Management:</strong> Efficient use of fuel to maximize performance without running out during the race.</li>
                <li><strong>Overtaking Strategies:</strong> Tactics to pass competitors while minimizing time and risk.</li>
                <li><strong>Qualifying Strategies:</strong> Approaches to secure a favorable starting position on the grid.</li>
            </ul>
        </div>

                <div class="analysis-content" id="races-content" style="display: none;">
            <h2>Race Circuits in Formula 1</h2>
            <p>Formula 1 races take place on a variety of circuits, each with its unique challenges and characteristics. Here are some notable race circuits:</p>
            <ul>
                <li><strong>Monaco Grand Prix:</strong> Known for its tight and challenging street circuit in the principality of Monaco.</li>
                <li><strong>Suzuka Circuit:</strong> A figure-eight layout in Japan, famous for its demanding corners like the "S" curves and the Degner Curve.</li>
                <li><strong>Monza Circuit:</strong> Hosts the Italian Grand Prix and is known for its high-speed straights and historic significance.</li>
                <li><strong>Spa-Francorchamps:</strong> Located in Belgium, it features a mix of fast straights and challenging corners, such as Eau Rouge.</li>
                <li><strong>Silverstone Circuit:</strong> Home of the British Grand Prix, characterized by its fast corners like Maggots and Becketts.</li>
                <li><strong>Singapore Street Circuit:</strong> A night race on the streets of Singapore, demanding precision and concentration.</li>
                <li><strong>Circuit of the Americas:</strong> Located in Austin, Texas, with a challenging layout and a distinctive uphill run to Turn 1.</li>
                <li><strong>Baku City Circuit:</strong> Known for its narrow sections through the city and the long straight along the Baku waterfront.</li>
                <li><strong>Shanghai International Circuit:</strong> Hosts the Chinese Grand Prix, featuring a unique design with a long back straight.</li>
                <li><strong>Hungaroring:</strong> A twisty and narrow circuit in Hungary, providing limited overtaking opportunities.</li>
            </ul>
        </div>

        <div class="analysis-content" id="technology-content" style="display: none;">
            <h2>Technology Innovations in Formula 1</h2>
            <p>Formula 1 is a hotbed for technological innovations that often find their way into everyday vehicles. Here are some technological advancements in F1:</p>
            <ul>
                <li><strong>Hybrid Power Units:</strong> F1 cars use hybrid power units combining a V6 turbocharged engine with energy recovery systems.</li>
                <li><strong>Drag Reduction System (DRS):</strong> Adjustable flaps on the rear wing to reduce drag and enhance straight-line speed.</li>
                <li><strong>Energy Recovery Systems (ERS):</strong> Components like MGU-K and MGU-H that recover and reuse energy during braking and from exhaust heat.</li>
                <li><strong>Aerodynamic Innovations:</strong> Advanced aerodynamics, including front wings, bargeboards, and diffusers, to optimize downforce and reduce drag.</li>
                <li><strong>Carbon Fiber Construction:</strong> F1 cars are constructed with lightweight and strong carbon fiber materials for chassis and body parts.</li>
                <li><strong>Advanced Materials:</strong> Use of materials like titanium and composites for lightweight and durable components.</li>
                <li><strong>Telemetry and Data Analysis:</strong> Advanced data collection and telemetry systems for real-time analysis of car performance.</li>
                <li><strong>Advanced Tires:</strong> Specially designed and customized tires for different track conditions, providing optimal grip and durability.</li>
                <li><strong>Simulations and Virtual Reality:</strong> Use of simulations and virtual reality for driver training and testing.</li>
                <li><strong>Computational Fluid Dynamics (CFD):</strong> Simulation techniques to optimize aerodynamic designs without physical prototypes.</li>
            </ul>
        </div>

        <div class="analysis-content" id="teams-content" style="display: none;">
            <h2>Formula 1 Teams</h2>
            <p>Formula 1 consists of teams that compete in the championship, each with its unique history, achievements, and characteristics. Here are some notable F1 teams:</p>
            <ul>
                <li><strong>Mercedes-AMG Petronas Formula One Team:</strong> A dominant force in recent years, winning multiple championships.</li>
                <li><strong>Scuderia Ferrari:</strong> The most successful and iconic team in F1 history, known for its passionate fanbase.</li>
                <li><strong>Red Bull Racing:</strong> A team known for its energy and aggressive approach, challenging the traditional powerhouses.</li>
                <li><strong>McLaren F1 Team:</strong> A historic team with a rich legacy, making a resurgence in recent seasons.</li>
                <li><strong>Aston Martin Cognizant Formula One Team:</strong> Formerly Racing Point, rebranded with the luxury carmaker's involvement.</li>
                <li><strong>Alpine F1 Team:</strong> The team associated with the Alpine brand, showcasing French automotive excellence.</li>
                <li><strong>Alfa Romeo Racing Orlen:</strong> A team with a connection to the Alfa Romeo brand, bringing style and heritage to F1.</li>
                <li><strong>Haas F1 Team:</strong> An American team in F1, known for its association with Haas Automation.</li>
                <li><strong>Williams Racing:</strong> A historic team with a storied past, focusing on rebuilding its competitive edge.</li>
                <li><strong>Scuderia AlphaTauri:</strong> A sister team to Red Bull Racing, providing a platform for young talents.</li>
            </ul>
        </div>
    </div>

    <?php
    include "view-footer.php";
    ?>

    <script>
        function changeInsight() {
            var topic = document.getElementById('insights-topic').value;
            var carComponentsContent = document.getElementById('car-components-content');
            var strategiesContent = document.getElementById('strategies-content');
            var racesContent = document.getElementById('races-content');
            var technologyContent = document.getElementById('technology-content');
            var teamsContent = document.getElementById('teams-content');

            carComponentsContent.style.display = topic === 'car-components' ? 'block' : 'none';
            strategiesContent.style.display = topic === 'strategies' ? 'block' : 'none';
            racesContent.style.display = topic === 'races' ? 'block' : 'none';
            technologyContent.style.display = topic === 'technology' ? 'block' : 'none';
            teamsContent.style.display = topic === 'teams' ? 'block' : 'none';
        }
    </script>
    
</body>

</html>
