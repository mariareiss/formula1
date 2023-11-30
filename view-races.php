<h1>Races</h1>
<div class="table-responsive">
  <table class="table">
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
<?php
while ($race = $races->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $race['race_name']; ?></td>
    <td><?php echo $race['race_location']; ?></td>
    <td><?php echo $race['race_laps']; ?></td>
    <td><?php echo $race['race_winner']; ?></td>
    <td><?php echo $race['race_team_winner']; ?></td>
    <td>
      
    </td>
    <td>
      <form method="post" action="results.php">
        <input type="hidden" name="rid" value="<?php echo $result['result_id']; ?>">
      <button type="submit" class="btn btn-primary">Race Results</button>
    </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
