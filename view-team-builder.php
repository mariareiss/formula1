<h1>Build your Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Team Name</th>
        <th>Driver</th>
        <th>Principal</th>
        <th>Season</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($teambuilder = $teamsbuilder->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $teambuilder['driver_b_name']; ?></td>
    <td><?php echo $teambuilder['team_b_name']; ?></td>
    <td><?php echo $teambuilder['team_principal_name']; ?></td>
    <td><?php echo $teambuilder['team_b_season']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
