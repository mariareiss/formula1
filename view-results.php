<h1>Results</h1>
<div class="table-responsive">
  <table class="table" style="width: 1200px;">
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
            <!-- Add any additional columns or content here -->
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>


