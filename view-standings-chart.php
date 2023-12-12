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
});


