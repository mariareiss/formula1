<?php
$pageTitle = "Polls";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 Polls</title>
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

        main {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 98%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #333;
        }

        .poll-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
        }

        .poll-question {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .poll-options {
            list-style: none;
            padding: 0;
        }

        .poll-option {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .vote-btn {
            padding: 8px 16px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .vote-btn:hover {
            background-color: #0056b3;
        }

        .results-container {
            margin-top: 10px;
            font-weight: bold;
        }

        .poll-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Formula 1 Polls</h1>
    </header>

    <main>
        <div class="poll-container">
            <h2 class="poll-title">Poll 1: Favorite Driver</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <span>Lewis Hamilton</span>
                    <button class="vote-btn" onclick="vote('hamilton', 'driver')">Vote</button>
                    <span id="votes-hamilton">0</span>
                </li>
                <li class="poll-option">
                    <span>Max Verstappen</span>
                    <button class="vote-btn" onclick="vote('verstappen', 'driver')">Vote</button>
                    <span id="votes-verstappen">0</span>
                </li>
                <li class="poll-option">
                    <span>Charles Leclerc</span>
                    <button class="vote-btn" onclick="vote('leclerc', 'driver')">Vote</button>
                    <span id="votes-leclerc">0</span>
                </li>
                <li class="poll-option">
                    <span>Valtteri Bottas</span>
                    <button class="vote-btn" onclick="vote('bottas', 'driver')">Vote</button>
                    <span id="votes-bottas">0</span>
                </li>
            </ul>
            <div class="results-container" id="results-driver">Total Votes: 0</div>
        </div>

        <div class="poll-container">
            <h2 class="poll-title">Poll 2: Best Team</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <span>Mercedes</span>
                    <button class="vote-btn" onclick="vote('mercedes', 'team')">Vote</button>
                    <span id="votes-mercedes">0</span>
                </li>
                <li class="poll-option">
                    <span>Red Bull Racing</span>
                    <button class="vote-btn" onclick="vote('redbull', 'team')">Vote</button>
                    <span id="votes-redbull">0</span>
                </li>
                <li class="poll-option">
                    <span>Ferrari</span>
                    <button class="vote-btn" onclick="vote('ferrari', 'team')">Vote</button>
                    <span id="votes-ferrari">0</span>
                </li>
                <li class="poll-option">
                    <span>McLaren</span>
                    <button class="vote-btn" onclick="vote('mclaren', 'team')">Vote</button>
                    <span id="votes-mclaren">0</span>
                </li>
            </ul>
            <div class="results-container" id="results-team">Total Votes: 0</div>
        </div>

        <div class="poll-container">
            <h2 class="poll-title">Poll 3: Favorite Circuit</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <span>Monza</span>
                    <button class="vote-btn" onclick="vote('monza', 'circuit')">Vote</button>
                    <span id="votes-monza">0</span>
                </li>
                <li class="poll-option">
                    <span>Spa-Francorchamps</span>
                    <button class="vote-btn" onclick="vote('spa', 'circuit')">Vote</button>
                    <span id="votes-spa">0</span>
                </li>
                <li class="poll-option">
                    <span>Monaco</span>
                    <button class="vote-btn" onclick="vote('monaco', 'circuit')">Vote</button>
                    <span id="votes-monaco">0</span>
                </li>
                <li class="poll-option">
                    <span>Silverstone</span>
                    <button class="vote-btn" onclick="vote('silverstone', 'circuit')">Vote</button>
                    <span id="votes-silverstone">0</span>
                </li>
            </ul>
            <div class="results-container" id="results-circuit">Total Votes: 0</div>
        </div>

        <div class="poll-container">
            <h2 class="poll-title">Poll 4: Best Race of the Season</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <span>Monaco Grand Prix</span>
                    <button class="vote-btn" onclick="vote('monaco1', 'race')">Vote</button>
                    <span id="votes-monaco1-race">0</span>
                </li>
                <li class="poll-option">
                    <span>Italian Grand Prix</span>
                    <button class="vote-btn" onclick="vote('italy', 'race')">Vote</button>
                    <span id="votes-italy">0</span>
                </li>
                <li class="poll-option">
                    <span>Brazilian Grand Prix</span>
                    <button class="vote-btn" onclick="vote('brazil', 'race')">Vote</button>
                    <span id="votes-brazil">0</span>
                </li>
                <li class="poll-option">
                    <span>Singapore Grand Prix</span>
                    <button class="vote-btn" onclick="vote('singapore', 'race')">Vote</button>
                    <span id="votes-singapore">0</span>
                </li>
            </ul>
            <div class="results-container" id="results-race">Total Votes: 0</div>
        </div>

    </main>

    <script>
        const vote = (option, category) => {
            const votesElement = document.getElementById(`votes-${option}`);
            const totalVotesElement = document.getElementById(`results-${category}`);
            
            let currentVotes = parseInt(votesElement.innerText) || 0;
            currentVotes++;
            votesElement.innerText = currentVotes;
            
            let totalVotes = parseInt(totalVotesElement.innerText.split(": ")[1]) || 0;
            totalVotes++;
            totalVotesElement.innerText = `Total Votes: ${totalVotes}`;
        };
    </script>
</body>
</html>

<?php
include "view-footer.php";
?>
