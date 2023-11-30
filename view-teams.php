<h1>Teams of Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Principal</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $team['team_name']; ?></td>
    <td><?php echo $team['team_principal']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

