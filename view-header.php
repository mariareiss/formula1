<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('f1-image.avif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 1.0; /* Slightly more opaque */
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: linear-gradient(to right, #dc3545, #8b0000); /* Gradient background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
            max-width: 100%;
            z-index: 1000;
        }

        .navbar-brand {
            color: #fff; /* White text color */
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff; /* White text color */
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Yellow on hover */
        }

        .navbar-nav .nav-link.active {
            color: #000; /* Black text color for active link */
            font-weight: bold;
            background-color: #ffc107; /* Yellow background for active link */
            border-radius: 5px;
            padding: 8px 15px;
        }

        .search-container {
            text-align: center;
            margin-top: 20px;
            max-width: 100%;
        }

        .search-container input[type=text] {
            padding: 10px;
            margin: 5px 0;
            border: none;
            font-size: 17px;
            max-width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
        }

        .search-container button {
            padding: 10px;
            margin: 5px 0;
            cursor: pointer;
            background: #007bff; /* Blue button color */
            color: white;
            border: none;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Formula 1 Hub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'F1 Hub' ? 'active' : '' ?>" href="newspage.php">F1 Hub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Drivers' ? 'active' : '' ?>" href="drivers.php">Drivers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Races' ? 'active' : '' ?>" href="race.php">Races</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Standings' ? 'active' : '' ?>" href="standings.php">Standings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Build your Team' ? 'active' : '' ?>" href="builder.php">Build your Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Game' ? 'active' : '' ?>" href="game.php">Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Standings Chart' ? 'active' : '' ?>" href="standings-chart.php">Standings Chart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Race Map' ? 'active' : '' ?>" href="racemap.php">Race Map</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Glossary' ? 'active' : '' ?>" href="glossary.php">Glossary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Trivia Game' ? 'active' : '' ?>" href="trivia.php">Trivia Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Insights' ? 'active' : '' ?>" href="insights.php">Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $pageTitle === 'Polls' ? 'active' : '' ?>" href="polls.php">Polls</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</body>

</html>
