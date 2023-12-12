<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Standings chart</title>
    <!-- Place your CSS or meta tags here -->
</head>
<body>
    <h1>Standings chart</h1>
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <!-- Include necessary scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/zdog@1/dist/zdog.dist.min.js"></script>
    <script src="zdog-demo.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        // Get the context of the canvas element
        const ctx = document.getElementById('myChart').getContext('2d');

        // Example data (replace it with your data retrieval logic)
        const winsData = [
            <?php
            while ($standing = $standings->fetch_assoc()) {
                echo $standing['wins'] . ", ";
            }
            ?>
        ];

        // Example labels (replace it with your data retrieval logic)
        const labels = [
            <?php
            $standings = selectStandings();
            while ($standing = $standings->fetch_assoc()) {
                echo "'" . $standing['standing_id'] . "', ";
            }
            ?>
        ];

        // Create the doughnut chart
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
            <?php
                        while ($standing = $standings->fetch_assoc()) {
                            echo "'" . $standing['standing_id'] . ", ";
            }
            ?>
                ]
                }],
                labels: [
                    <?php
                        $standings = selectStandings();    
                        while ($standing = $standings->fetch_assoc()) {
                            echo "'" . $standing['standing_id'] . ", ";
            }
            ?>
            ]
            },
        });
    </script>
</body>
</html>

    
    
