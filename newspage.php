<?php
$pageTitle = "Race Results";
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
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: #fff;
            border-bottom: 2px solid #fff;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        .instructions {
            text-align: center;
            margin: 30px;
            max-width: 800px;
        }

        section {
            margin: 30px;
            text-align: center;
            color: #333;
            max-width: 800px;
        }

        .grid-container {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            justify-content: center;
        }

        .grid-item {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .grid-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .team-logo {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border: 5px solid #333;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .team-name {
            font-weight: bold;
            margin: 10px 0;
            font-size: 16px;
        }
    </style>
    <title>Formula One News Hub</title>
</head>

<body>
    <header>
        <h1>Formula One News Hub</h1>
    </header>

    <div class="instructions">
        <h2>Click on a team to learn more</h2>
    </div>

    <section id="byTeam">
        <div class="grid-container">
            <!-- Team grid with team names -->
            <div class="grid-item" onclick="redirectToWebsite('https://www.mercedesamgf1.com/')">
                <div class="team-logo"><img src="mercedes_logo.png" alt="Mercedes Logo"></div>
                <p class="team-name">Mercedes</p>
            </div>

            <!-- ... (other team items) ... -->

            <div class="grid-item" onclick="redirectToWebsite('https://scuderia.alphatauri.com/en/')">
                <div class="team-logo"><img src="alpha.png" alt="AlphaTauri Logo"></div>
                <p>AlphaTauri</p>
            </div>
        </div>
    </section>

    <script>
        function redirectToWebsite(url) {
            window.open(url, '_blank');
        }
    </script>

    <?php include "view-footer.php"; ?>
</body>

</html>
