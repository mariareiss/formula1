<h1>Build your Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Driver</th>
        <th>Team Name</th>
        <th>Principal</th>
        <th>Season</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($builder = $builders->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $builder['driver_b_name']; ?></td>
    <td><?php echo $builder['team_b_name']; ?></td>
    <td><?php echo $builder['team_principal_name']; ?></td>
    <td><?php echo $builder['team_b_season']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
