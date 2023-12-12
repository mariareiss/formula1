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
                'white',   // Color for the first slice
                'grey',    // Color for the second slice
                'red',     // Color for the third slice
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
});


