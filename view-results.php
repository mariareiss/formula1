<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
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

        .table-container {
            width: 1200px;
            margin-top: 20px; /* Adjust the margin as needed */
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Formula One Results Data</h1>
    </header>
    
    <div class="table-container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Final Position</th>
                        <th>Point Earned in this Race</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($result = $results->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $result['position']; ?></td>
                            <td><?php echo $result['points_earned']; ?></td>
                            <td>
                                <!-- Add any additional columns or content here -->
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>



