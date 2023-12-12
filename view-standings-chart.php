<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Standings Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Standings Chart</h1>

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('myChart');

        // Assuming your PHP code will fetch the top 5 drivers based on wins
        const standingsData = [
            <?php
            $standings = selectTopStandings(5); // Modify this function to return top 5 drivers
            $data = [];
            while ($standing = $standings->fetch_assoc()) {
                $data[] = "{label: '{$standing['driver_name']}', wins: {$standing['wins']}}";
            }
            echo implode(", ", $data);
            ?>
        ];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: standingsData.map(data => data.label),
                datasets: [{
                    label: 'Wins',
                    data: standingsData.map(data => data.wins),
                    backgroundColor: [
                        '#F5EEEC', 
                        '#B5A7A5', 
                        '#FF390F',
                        // Add more colors if needed
                    ],
                    borderColor: [
                        // Define border colors if needed
                    ],
                    borderWidth: 1
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



