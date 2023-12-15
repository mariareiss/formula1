<?php
$pageTitle = "trivia";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Trivia Page</title>
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
            height: 100vh;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #001f3f; /* Dark blue color */
            color: #fff;
            border-bottom: 2px solid #fff;
            width: 100%;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }


        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .question {
            margin-bottom: 15px;
        }

        .options {
            display: flex;
            flex-direction: column;
        }

        .option {
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #555;
        }

        #result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <h1>F1 Trivia Page</h1>
    </header>

    <main>
        <h2>Trivia Question</h2>
        <div id="question" class="question"></div>
        
        <div class="options" id="options"></div>

        <button onclick="checkAnswer()">Submit Answer</button>
        <p id="result"></p>
    </main>

    <script>
        const triviaData = [
            {
                question: "Which team has the most Constructors' Championships in Formula 1?",
                options: ["Ferrari", "Mercedes", "Red Bull Racing", "McLaren"],
                correctAnswer: "Ferrari"
            },
            {
                question: "Who holds the record for the most Grand Prix wins?",
                options: ["Michael Schumacher", "Lewis Hamilton", "Ayrton Senna", "Alain Prost"],
                correctAnswer: "Lewis Hamilton"
            },
            {
                question: "In which year did Formula 1 have its first race?",
                options: ["1950", "1960", "1970", "1980"],
                correctAnswer: "1950"
            },
            {
                question: "Which driver has won the most World Championships?",
                options: ["Ayrton Senna", "Juan Manuel Fangio", "Michael Schumacher", "Lewis Hamilton"],
                correctAnswer: "Lewis Hamilton"
            },
            {
                question: "What is the official tire supplier for Formula 1?",
                options: ["Michelin", "Pirelli", "Bridgestone", "Goodyear"],
                correctAnswer: "Pirelli"
            },
            {
                question: "Which circuit is known as 'The Temple of Speed'?",
                options: ["Monaco", "Silverstone", "Monza", "Spa-Francorchamps"],
                correctAnswer: "Monza"
            },
            {
                question: "How many teams participate in a typical Formula 1 season?",
                options: ["8", "10", "12", "20"],
                correctAnswer: "10"
            },
            {
                question: "Which country has produced the most Formula 1 World Champions?",
                options: ["United Kingdom", "Germany", "Brazil", "Italy"],
                correctAnswer: "United Kingdom"
            },
            {
                question: "Who is the youngest Formula 1 World Champion?",
                options: ["Sebastian Vettel", "Ayrton Senna", "Michael Schumacher", "Lewis Hamilton"],
                correctAnswer: "Sebastian Vettel"
            },
            {
                question: "What is DRS in Formula 1?",
                options: ["Drag Reduction System", "Dynamic Race Strategy", "Downforce Recovery System", "Double Race Suspension"],
                correctAnswer: "Drag Reduction System"
            }
            // Add more trivia questions as needed
        ];

        let currentQuestionIndex = 0;
        const questionElement = document.getElementById("question");
        const optionsElement = document.getElementById("options");
        const resultElement = document.getElementById("result");

        function loadQuestion() {
            const currentQuestion = triviaData[currentQuestionIndex];
            questionElement.textContent = currentQuestion.question;

            optionsElement.innerHTML = "";
            currentQuestion.options.forEach((option, index) => {
                const optionElement = document.createElement("div");
                optionElement.className = "option";
                optionElement.innerHTML = `<input type="radio" name="answer" value="${option}" id="option${index + 1}">
                                            <label for="option${index + 1}">${option}</label>`;
                optionsElement.appendChild(optionElement);
            });
        }

        function checkAnswer() {
            const selectedOption = document.querySelector('input[name="answer"]:checked');
            if (selectedOption) {
                const userAnswer = selectedOption.value;
                const correctAnswer = triviaData[currentQuestionIndex].correctAnswer;

                if (userAnswer === correctAnswer) {
                    resultElement.textContent = "Correct!";
                } else {
                    resultElement.textContent = `Wrong! The correct answer is ${correctAnswer}.`;
                }

                currentQuestionIndex++;
                if (currentQuestionIndex < triviaData.length) {
                    setTimeout(() => {
                        resultElement.textContent = "";
                        loadQuestion();
                    }, 1500);
                } else {
                    resultElement.textContent = "Quiz completed!";
                }
            } else {
                resultElement.textContent = "Please select an answer.";
            }
        }

        // Initial load
        loadQuestion();
    </script>

</body>
</html>


<?php
include "view-footer.php";
?>
