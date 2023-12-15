<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Standings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Set your desired background color */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
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

        .navbar {
            background-color: #001f3f;
            padding: 1rem;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
        }

        .container {
            margin-top: 20px;
            max-width: 1600px; /* Set a maximum width for the container */
            margin-left: auto;
            margin-right: auto;
        }

        th {
            font-weight: bold;
        }

        td,
        th {
            text-align: center;
            vertical-align: middle !important;
        }

        .driver-link {
            color: #007bff; /* Set the link color */
            text-decoration: none;
        }

        .driver-link:hover {
            text-decoration: underline;
        }

        .table {
            margin-top: 20px; /* Add margin to the table */
        }

        .col-auto {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff; /* Set your desired button color */
            border-color: #007bff; /* Set the button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Set the hover color */
            border-color: #0056b3; /* Set the hover border color */
        }

        .add-btn-container {
            text-align: right;
            margin-bottom: 20px;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a class="navbar-brand" href="#">Formula One Standings Data</a>
    </div>

    <div class="container">
        <header>
            <h1>Formula One Standings Data</h1>
        </header>

        <div class="row">
            <div class="col">
                <h1>Standings</h1>
            </div>
            <div class="col-auto add-btn-container">
                <?php include "view-standings-newform.php"; ?>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Driver</th>
                        <th>Season</th>
                        <th>Points</th>
                        <th>Wins</th>
                        <th>Podiums</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($standing = $standings->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $standing['driver_name']; ?></td>
                            <td><?php echo $standing['season']; ?></td>
                            <td><?php echo $standing['points']; ?></td>
                            <td><?php echo $standing['wins']; ?></td>
                            <td><?php echo $standing['podiums']; ?></td>
                            <td>
                                <?php include "view-standings-editform.php"; ?>
                            </td>
                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="standing_id" value="<?php echo $standing['standing_id']; ?>">
                                    <input type="hidden" name="actionType" value="Delete">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.500 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
