<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #FF6961; 
        }
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display: inline;
            margin-right: 20px;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        .search-container {
            margin-top: 20px;
        }
        .search-container input[type=text] {
            padding: 8px;
            margin-right: 10px;
            width: 200px;
        }
        .search-container button {
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Project</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"/>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Driver</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trips.php">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="destinations.php">Race</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="packing.php">Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="game.html">Game</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="col-md-4">
                <div class="search-container">
                    <form action="" method="GET">
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <?php
                if (isset($_GET['search'])) {
                    $search_query = $_GET['search'];
                    echo "<p>You searched for: " . htmlspecialchars($search_query) . "</p>";
                    // Process your search query here or interact with the database accordingly
                }
                ?> 
            </div>
        </main>
    </div>
   
</body>
</html>
