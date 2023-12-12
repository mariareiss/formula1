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

        // PHP to populate JavaScript arrays from PHP data
        const labels = [
            <?php
            $standings = selectStandings();
            while ($standing = $standings->fetch_assoc()) {
                echo "'" . $standing['standing_id'] . "', ";
            }
            ?>
        ];

        const data = [
            <?php
            $standings = selectStandings();
            while ($standing = $standings->fetch_assoc()) {
                echo $standing['standing_id'] . ", ";
            }
            ?>
        ];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Standing ID',
                    backgroundColor: 'rgba(54, 162, 235, 0.8)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    data: data
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









