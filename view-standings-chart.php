<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Standings chart</h1>
    
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <div><canvas class="zdog-canvas" width="80" height="80"></canvas></div>
    
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
    type: 'pie',
    data: {
        datasets: [{
            data: [
                <?php
                while ($standing = $standings->fetch_assoc()) {
                    echo $standing['wins'] . ", ";
                }
                ?>
            ],
            backgroundColor: [
                '#F5EEEC',   // Color for the first slice
                '#B5A7A5',    // Color for the second slice
                '#FF390F',     // Color for the third slice
                // Add more colors if needed for additional slices
            ],
        }],
        labels: [
            <?php
            $standings = selectStandings();    
            while ($standing = $standings->fetch_assoc()) {
                echo "'" . $standing['driver_name'] . "', ";
            }
            ?>
        ]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    color: '#000000' 
                }
            }
        }
    }
});
    </script>
</body>
</html>
