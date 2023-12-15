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
            type: 'bar',  // Change the chart type to 'bar'
            data: {
                labels: [
                    <?php
                    $standings = selectStandings();    
                    while ($standing = $standings->fetch_assoc()) {
                        echo "'" . $standing['driver_name'] . "', ";
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Wins',
                    data: [
                        <?php
                        $standings = selectStandings();    
                        while ($standing = $standings->fetch_assoc()) {
                            echo $standing['wins'] . ", ";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        '#F5EEEC',   // Color for the first bar
                        '#B5A7A5',    // Color for the second bar
                        '#FF390F',     // Color for the third bar
                        // Add more colors if needed for additional bars
                    ],
                    borderColor: [
                        '#F5EEEC',   // Border color for the first bar
                        '#B5A7A5',    // Border color for the second bar
                        '#FF390F',     // Border color for the third bar
                        // Add more colors if needed for additional bars
                    ],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
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
