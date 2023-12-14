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

            <div class="trivia-question" id="question2">
                <h2>Question 2</h2>
                <p>Which team has the most Constructors' Championships in Formula 1 history?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question2', 'A')">A. Scuderia Ferrari</div>
                    <div class="option" onclick="checkAnswer('question2', 'B')">B. Mercedes-AMG Petronas Formula One Team</div>
                    <div class="option" onclick="checkAnswer('question2', 'C')">C. Red Bull Racing</div>
                    <div class="option" onclick="checkAnswer('question2', 'D')">D. Williams Racing</div>
                </div>
            </div>

            <div class="trivia-question" id="question3">
                <h2>Question 3</h2>
                <p>Which circuit is known as "The Temple of Speed"?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question3', 'A')">A. Circuit de Monaco</div>
                    <div class="option" onclick="checkAnswer('question3', 'B')">B. Circuit de Spa-Francorchamps</div>
                    <div class="option" onclick="checkAnswer('question3', 'C')">C. Autodromo Nazionale Monza</div>
                    <div class="option" onclick="checkAnswer('question3', 'D')">D. Suzuka Circuit</div>
                </div>
            </div>

            <div class="trivia-question" id="question4">
                <h2>Question 4</h2>
                <p>Which driver holds the record for the most Grand Prix wins in a single season?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question4', 'A')">A. Lewis Hamilton</div>
                    <div class="option" onclick="checkAnswer('question4', 'B')">B. Sebastian Vettel</div>
                    <div class="option" onclick="checkAnswer('question4', 'C')">C. Michael Schumacher</div>
                    <div class="option" onclick="checkAnswer('question4', 'D')">D. Ayrton Senna</div>
                </div>
            </div>

            <div class="trivia-question" id="question5">
                <h2>Question 5</h2>
                <p>Which team introduced the concept of the "double diffuser" in the 2009 season?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question5', 'A')">A. McLaren</div>
                    <div class="option" onclick="checkAnswer('question5', 'B')">B. Ferrari</div>
                    <div class="option" onclick="checkAnswer('question5', 'C')">C. Brawn GP</div>
                    <div class="option" onclick="checkAnswer('question5', 'D')">D. Red Bull Racing</div>
                </div>
            </div>

            <div class="trivia-question" id="question6">
                <h2>Question 6</h2>
                <p>Which driver is known as the "Flying Finn"?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question6', 'A')">A. Mika Hakkinen</div>
                    <div class="option" onclick="checkAnswer('question6', 'B')">B. Kimi Raikkonen</div>
                    <div class="option" onclick="checkAnswer('question6', 'C')">C. Valtteri Bottas</div>
                    <div class="option" onclick="checkAnswer('question6', 'D')">D. Keke Rosberg</div>
                </div>
            </div>

            <div class="trivia-question" id="question7" >
                <h2>Question 7</h2>
                <p>Which team is known for its "Orange Army" fanbase?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question7', 'A')">A. Scuderia Ferrari</div>
                    <div class="option" onclick="checkAnswer('question7', 'B')">B. Mercedes-AMG Petronas Formula One Team</div>
                    <div class="option" onclick="checkAnswer('question7', 'C')">C. Red Bull Racing</div>
                    <div class="option" onclick="checkAnswer('question7', 'D')">D. McLaren</div>
                </div>
            </div>

            <div class="trivia-question" id="question8">
                <h2>Question 8</h2>
                <p>Which Grand Prix is known for its unique night race format?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question8', 'A')">A. Monaco Grand Prix</div>
                    <div class="option" onclick="checkAnswer('question8', 'B')">B. Singapore Grand Prix</div>
                    <div class="option" onclick="checkAnswer('question8', 'C')">C. Australian Grand Prix</div>
                    <div class="option" onclick="checkAnswer('question8', 'D')">D. Italian Grand Prix</div>
                </div>
            </div>

            <div class="trivia-question" id="question9">
                <h2>Question 9</h2>
                <p>Which driver won the inaugural FIA Pole Trophy in 2019?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question9', 'A')">A. Lewis Hamilton</div>
                    <div class="option" onclick="checkAnswer('question9', 'B')">B. Valtteri Bottas</div>
                    <div class="option" onclick="checkAnswer('question9', 'C')">C. Max Verstappen</div>
                    <div class="option" onclick="checkAnswer('question9', 'D')">D. Charles Leclerc</div>
                </div>
            </div>

            <div class="trivia-question" id="question10">
                <h2>Question 10</h2>
                <p>Which team introduced the "shark fin" aerodynamic feature in the 2017 season?</p>
                <div class="options-container">
                    <div class="option" onclick="checkAnswer('question10', 'A')">A. Red Bull Racing</div>
                    <div class="option" onclick="checkAnswer('question10', 'B')">B. Mercedes-AMG Petronas Formula One Team</div>
                    <div class="option" onclick="checkAnswer('question10', 'C')">C. Scuderia Ferrari</div>
                    <div class="option" onclick="checkAnswer('question10', 'D')">D. Williams Racing</div>
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
