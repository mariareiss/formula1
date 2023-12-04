<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Standings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .table-responsive {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f0f0f0;
      font-weight: bold;
      color: #333;
    }

    td {
      color: #444;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
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
