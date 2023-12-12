<!DOCTYPE html>
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
            type: 'pie',
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

