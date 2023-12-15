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
            background-color: #001f3f; /* Dark blue color */
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
            max-width: 1600px;
        }

        section {
            margin: 30px;
            text-align: center;
            color: #333;
            max-width: 1600px;
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

            <div class="grid-item" onclick="redirectToWebsite('https://www.redbullracing.com/int-en')">
                <div class="team-logo"><img src="redbull.jpg" alt="Red Bull Logo"></div>
                <p class="team-name">Red Bull</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://www.ferrari.com/en-EN/formula1')">
                <div class="team-logo"><img src="ferrari.jpg" alt="Ferrari Logo"></div>
                <p class="team-name">Ferrari</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://www.mclaren.com/racing/')">
                <div class="team-logo"><img src="mclaren2.png" alt="McLaren Logo"></div>
                <p class="team-name">McLaren</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://www.alpine-cars.co.uk/formula-1/f1-team.html')">
                <div class="team-logo"><img src="alpine.jpg" alt="Alpine Logo"></div>
                <p class="team-name">Alpine</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://www.astonmartinf1.com/en-GB')">
                <div class="team-logo"><img src="aston.jpg" alt="Aston Martin Logo"></div>
                <p class="team-name">Aston Martin</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://scuderia.alphatauri.com/en/')">
                <div class="team-logo"><img src="Alfa.png" alt="Alfa Romeo Logo"></div>
                <p class="team-name">Alfa Romeo</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://www.haasf1team.com/')">
                <div class="team-logo"><img src="haas.png" alt="Haas Logo"></div>
                <p class="team-name">Haas</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://www.williamsf1.com/')">
                <div class="team-logo"><img src="williams.png" alt="Williams Logo"></div>
                <p class="team-name">Williams</p>
            </div>

            <div class="grid-item" onclick="redirectToWebsite('https://scuderia.alphatauri.com/en/')">
                <div class="team-logo"><img src="alpha.png" alt="AlphaTauri Logo"></div>
                <p class="team-name">AlphaTauri</p>
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
