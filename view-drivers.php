<h1>Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>Driver Name</th>
      <th>Nationality</th>
      <th>Age</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
  <?php
  while ($driver = $drivers->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $driver['driver_name']; ?></td>
        <td><?php echo $driver['driver_nationality']; ?></td>
        <td><?php echo $driver['driver_age']; ?></td>
        <td><a href="teams.php?id=<?php echo $driver['driver_id']; ?>">Driver Team</a></td>
      </tr>
    <?php
  }
  ?>
    </tbody>
  </table>
</div>
