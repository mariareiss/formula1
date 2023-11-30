<h1>Standings</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Season</th>
      <th>Points</th>
      <th>Wins</th>
      <th>Podiums</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($standing = $standings->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $standing['season']; ?></td>
    <td><?php echo $standing['points']; ?></td>
    <td><?php echo $standing['wins']; ?></td>
    <td><?php echo $standing['podiums']; ?></td>
    <td>
      
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
