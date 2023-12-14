<?php
$pageTitle = "Race Results";
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
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .poll-container {
            margin-bottom: 30px;
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

        .results-container {
            margin-top: 20px;
            font-weight: bold;
        }

        .poll-title {
            font-size: 24px;
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
            <h2 class="poll-title">Poll 1: Favorite Formula 1 Driver</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('hamilton', 'driver')">Vote for Lewis Hamilton</button>
                </li>
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('verstappen', 'driver')">Vote for Max Verstappen</button>
                </li>
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('leclerc', 'driver')">Vote for Charles Leclerc</button>
                </li>
            </ul>
            <div class="results-container" id="results-driver">Votes:</div>
        </div>

        <div class="poll-container">
            <h2 class="poll-title">Poll 2: Best Formula 1 Team</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('mercedes', 'team')">Vote for Mercedes</button>
                </li>
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('redbull', 'team')">Vote for Red Bull Racing</button>
                </li>
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('ferrari', 'team')">Vote for Ferrari</button>
                </li>
            </ul>
            <div class="results-container" id="results-team">Votes:</div>
        </div>

        <div class="poll-container">
            <h2 class="poll-title">Poll 3: Favorite F1 Circuit</h2>
            <ul class="poll-options">
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('monza', 'circuit')">Vote for Monza</button>
                </li>
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('spa', 'circuit')">Vote for Spa-Francorchamps</button>
                </li>
                <li class="poll-option">
                    <button class="vote-btn" onclick="vote('monaco', 'circuit')">Vote for Monaco</button>
                </li>
            </ul>
            <div class="results-container" id="results-circuit">Votes:</div>
        </div>

    </main>

    <script>
        const vote = (option, category) => {
            const resultsElement = document.getElementById(`results-${category}`);
            const currentVotes = parseInt(resultsElement.innerText.split(": ")[1]) || 0;
            resultsElement.innerText = `Votes: ${currentVotes + 1}`;
        };
    </script>
</body>
</html>

<?php
include "view-footer.php";
?>
