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
            opacity: 1.0;
        }

        .navbar {
            background-color: #343a40; /* Dark background color */
            max-width:100%;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff; /* White text color */
        }

        .search-container {
            text-align: center;
            margin-top: 20px;
            max-width:100%;
        }

        .search-container input[type=text] {
            padding: 10px;
            margin: 5px 0;
            border: none;
            font-size: 17px;
            max-width:100%;
        }

        .search-container button {
            padding: 10px;
            margin: 5px 0;
            cursor: pointer;
            background: #007bff; /* Blue button color */
            color: white;
            border: none;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Project</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="newspage.php">F1 Hub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="drivers.php">Drivers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="race.php">Races</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="standings.php">Standings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="builder.php">Build your Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="game.php">Game</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</body>

</html>
