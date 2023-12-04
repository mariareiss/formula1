<h1>Results</h1>

<div class="card-group">
  <?php
  while ($result = $results->fetch_assoc()) {
    ?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $results['position']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
        
  <?php
    $results = selectResults($results['position']);
    
  while ($result = $results->fetch_assoc()) {
    ?>
      <li class="list-group-item"><?php echo $result['position']; ?> - <?php echo $result['points_earned'];  ?></li>
  <?php
  }
?>
    </div>
  </div>
  <?php
  }
  ?>
</div>
