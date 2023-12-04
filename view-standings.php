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

<h1>Standings</h1>

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
          <td></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
