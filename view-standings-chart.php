<!DOCTYPE html>
<html lang="en">

<head>
    <title>Standings Chart</title>
</head>

<body>
    <h1 style="text-align: center;">Standings Chart</h1>

    <div style="width: 1100px; margin: 0 auto;">
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
            type: 'pie', // Change the chart type to 'pie'
            data: {
                labels: labels,
                datasets: [{
                    label: 'Standing ID',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
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
                }
            }
        });
    </script>
</body>

</html>
