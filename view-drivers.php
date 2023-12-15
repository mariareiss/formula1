<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Set your desired background color */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height:0px;
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
        
        body {
            margin: 0;
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
        .driver-link {
            color: #007bff; /* Set the link color */
            text-decoration: none;
        }
        .driver-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <h1>Formula One Driver Data</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Drivers</h1>
            </div>
            <div class="col-auto">
                <?php
                include "view-driver-newform.php";
                ?>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Driver Name</th>
                        <th>Nationality</th>
                        <th>Age</th>
                        <th>Driver Team</th>
                        <th></th>     
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($driver = $drivers->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $driver['driver_name']; ?></td>
                            <td><?php echo $driver['driver_nationality']; ?></td>
                            <td><?php echo $driver['driver_age']; ?></td>
                            <td><a href="teams.php?id=<?php echo $driver['driver_id']; ?>" class="driver-link">Driver Team</a></td>
                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="drid" value="<?php echo $driver['driver_id'];?>">
                                    <input type="hidden" name="actionType" value="Delete">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.500 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </button>
                                </form> 
                            </td>
                            <td>
                                <?php include "view-driver-editform.php"; ?>
                            </td>
                            <td>
                                <form method="post" action="teams.php">
                                    <input type="hidden" name="tbid" value="<?php echo $driver['driver_id'];?>">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
