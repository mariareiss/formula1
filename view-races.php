<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Races</title>
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
        .container {
            margin-top: 20px;
        }
        th {
            font-weight: bold;
        }
        td, th {
            text-align: center;
            vertical-align: middle !important;
        }
        .btn-primary {
            background-color: #007bff; /* Set your desired button color */
            border-color: #007bff; /* Set the button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Set the hover color */
            border-color: #0056b3; /* Set the hover border color */
        }
    </style>
</head>
<body>
    <header>
        <h1>Formula One Race Data</h1>
    </header>
    
    <div class="container">
        <h1>Races</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Race Name</th>
                        <th>Location</th>
                        <th>Total Laps</th>
                        <th>Winner</th>
                        <th>Team Winner</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($race = $races->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $race['race_name']; ?></td>
                            <td><?php echo $race['race_location']; ?></td>
                            <td><?php echo $race['race_laps']; ?></td>
                            <td><?php echo $race['race_winner']; ?></td>
                            <td><?php echo $race['race_team_winner']; ?></td>
                            <td>
                                <form method="post" action="results.php">
                                    <input type="hidden" name="rid" value="<?php echo $result['result_id']; ?>">
                                    <button type="submit" class="btn btn-primary">Race Results</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
