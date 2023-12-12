<!DOCTYPE html>
<html lang="en">

<head>
    <title>Standings Chart</title>
</head>

<body>
    <h1 style="text-align: center;">Standings Chart</h1>

    <div style="width: 800px; margin: 0 auto;">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        // Sample data (replace this with your actual data)
        const driverNames = ['Hamilton', 'Verstappen', 'Bottas', 'Perez', 'Leclerc'];
        const driverStandings = [331, 318, 203, 190, 180];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: driverNames,
                datasets: [{
                    label: 'Driver Standings',
                    data: driverStandings,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        fontColor: 'black',
                        fontSize: 16,
                        fontStyle: 'bold'
                    }
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: 'black',
                            fontSize: 14,
                            fontStyle: 'bold'
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Drivers',
                            fontColor: 'black',
                            fontSize: 16,
                            fontStyle: 'bold'
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontColor: 'black',
                            fontSize: 14,
                            fontStyle: 'bold',
                            beginAtZero: true
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Points',
                            fontColor: 'black',
                            fontSize: 16,
                            fontStyle: 'bold'
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>






// <!DOCTYPE html>
<html lang="en">
<head>
    <h1>Standings chart</h1>
    
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <div><canvas class="zdog-canvas" width="100" height="100"></canvas></div>
    
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
                    echo $standing['standing_id'] . ", ";
            }
            ?>
                ]
                }],
                
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
    </script>
</body>
</html>

