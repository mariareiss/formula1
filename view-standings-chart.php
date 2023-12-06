<head>
  <h1>Standings chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<div><canvas class="zdog-canvas" width="240" height="240"></canvas></div>

</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
<script src="zdog-demo.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($standing = $standings->fetch_assoc()) {
  echo $standing['wins'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$standings = selectStandings();
while ($standing = $standings->fetch_assoc()) {
echo "'" . $standing['standing_id'] . "', ";
}
?>
    ]
},
  });

  
</body>
    
    
