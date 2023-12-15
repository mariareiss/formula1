<?php
$pageTitle = "F1 Glossary";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Glossary</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #001f3f; /* Dark blue color */
            color: #fff;
            border-bottom: 2px solid #fff;
            width: 100%;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .term {
            margin-bottom: 20px;
        }

        .term-details {
            display: none;
        }

        .show-details-btn {
            cursor: pointer;
            color: #007BFF;
            text-decoration: underline;
        }

        .show-details-btn:hover {
            color: #0056b3;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>

<body>

    <header>
        <h1>F1 Glossary</h1>
    </header>

    <main>
        <div class="section">
            <h2>Term 1</h2>
            <div class="term">
                <p>
                    Definition of Term 1 goes here. Provide a detailed explanation of the term and its significance in Formula 1.
                </p>
                <button class="show-details-btn" onclick="toggleDetails('term1')">Show Details</button>
                <div class="term-details" id="term1-details">
                    <p>Additional details about Term 1.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Term 2</h2>
            <div class="term">
                <p>
                    Definition of Term 2 goes here. Provide a detailed explanation of the term and its significance in Formula 1.
                </p>
                <button class="show-details-btn" onclick="toggleDetails('term2')">Show Details</button>
                <div class="term-details" id="term2-details">
                    <p>Additional details about Term 2.</p>
                </div>
            </div>
        </div>

        <!-- Repeat similar blocks for other terms -->

    </main>

    <script>
        function toggleDetails(termId) {
            const termDetails = document.getElementById(`${termId}-details`);
            termDetails.style.display = termDetails.style.display === 'none' ? 'block' : 'none';
        }
    </script>

    <?php
    include "view-footer.php";
    ?>

</body>

</html>
