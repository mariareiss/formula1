<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Standing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Set your desired background color */
        }
        .container {
            margin-top: 20px;
            max-width: 1150px; /* Set a maximum width for the container */
            margin-left: auto;
            margin-right: auto;
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
        .table {
            margin-top: 05px; /* Add margin to the table */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Standings</h1>
    <div class="col-auto">
  <?php
  include "view-standings-newform.php";
  ?>
    </div>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Driver</th>
                <th>Season</th>
                <th>Points</th>
                <th>Wins</th>
                <th>Podiums</th>
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
                        <?php
                          include "view-standings-editform.php";
                          ?>
                    </td>

            <td>
      <form method="post" action="">
        <input type="hidden" name="standing_id" value="<?php echo $standings['standing_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
          </svg>
      </button>
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
