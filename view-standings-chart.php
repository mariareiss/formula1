<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standings Chart</title>
    
    <!-- Add your CSS styles or include external stylesheets here -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #001f3f; /* Dark blue color */
            color: #fff;
            border-bottom: 2px solid #fff;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        canvas {
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>

    <header>
        <h1>Standings Chart</h1>
    </header>

    <main>
        <canvas id="myChart"></canvas>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
    <script src="zdog-demo.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
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
                        '#F5EEEC',
                        '#B5A7A5',
                        '#FF390F',
                    ],
                    borderColor: [
                        '#F5EEEC',
                        '#B5A7A5',
                        '#FF390F',
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
