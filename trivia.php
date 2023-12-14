<?php
$pageTitle = "trivia";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>F1 Trivia</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        main {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .trivia-question {
            display: none;
        }

        .options-container {
            margin-top: 10px;
        }

        .option {
            cursor: pointer;
            padding: 10px;
            margin-bottom: 5px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .option:hover {
            background-color: #f9f9f9;
        }

        .correct {
            background-color: #9af79a;
        }

        .incorrect {
            background-color: #f88;
        }

        #result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>F1 Trivia Game</h1>
        </header>

        <main id="trivia-main">
            <div class="trivia-question" id="question1">
                <h2>Question 1</h2>
                <p>Who holds the record for the most Formula 1 World Championships?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question1', 'A')">A. Michael Schumacher</div>
                    <div class="option" onclick="checkAnswer('question1', 'B')">B. Lewis Hamilton</div>
                    <div class="option" onclick="checkAnswer('question1', 'C')">C. Ayrton Senna</div>
                    <div class="option" onclick="checkAnswer('question1', 'D')">D. Sebastian Vettel</div>
                </div>
            </div>


            <div id="result"></div>
        </main>

        <script>
            var currentQuestion = 1;

            function checkAnswer(questionId, selectedOption) {
                var question = document.getElementById(questionId);
                var options = question.getElementsByClassName('option');
                var result = document.getElementById('result');

                for (var i = 0; i < options.length; i++) {
                    options[i].style.backgroundColor = "#fff"; // Reset background color
                }

                if (selectedOption === 'B') {
                    question.style.display = "none";
                    currentQuestion++;

                    if (currentQuestion <= 10) {
                        var nextQuestion = document.getElementById('question' + currentQuestion);
                        nextQuestion.style.display = "block";
                    } else {
                        result.innerHTML = "Congratulations! You've completed the trivia.";
                    }
                } else {
                    options.forEach(function (option) {
                        if (option.innerHTML.includes(selectedOption)) {
                            option.style.backgroundColor = "#f88"; // Red for incorrect answer
                        } else if (option.innerHTML.includes('B')) {
                            option.style.backgroundColor = "#9af79a"; // Green for correct answer
                        }
                    });
                    result.innerHTML = "Incorrect! Try again.";
                }
            }
        </script>
    </div>
</body>

</html>


<?php
include "view-footer.php";
?>
