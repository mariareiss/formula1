<h1>Results</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Final Position</th>
      <th>Point Earned in this Race</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($result = $results->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $result['position']; ?></td>
    <td><?php echo $result['points_earned']; ?></td>
    <td>
      
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>