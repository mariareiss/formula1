<?php

// Formula 1 race simulation

// Define the racers
$racers = [
    'Lewis Hamilton',
    'Max Verstappen',
    'Valtteri Bottas',
    'Charles Leclerc',
    'Daniel Ricciardo',
    'Lando Norris',
    'Sebastian Vettel',
    'Pierre Gasly',
    'Fernando Alonso',
    'Esteban Ocon'
];

// Simulate the race
echo "Formula 1 Race Simulation\n\n";

$trackLength = 20; // Length of the track
$raceDistance = 100; // Total distance of the race

$raceResults = []; // Array to store race results

foreach ($racers as $racer) {
    $position = 0; // Starting position
    for ($distance = 0; $distance < $raceDistance; $distance += $trackLength) {
        $speed = rand(5, 15); // Randomize speed
        $position += $speed; // Update position
        usleep(50000); // Delay for visualization purposes (0.05 seconds)
        displayRaceTrack($racers, $racer, $position, $raceDistance);
    }
    $raceResults[$racer] = $position; // Store racer and final position
}

// Sort and display race results
arsort($raceResults);
echo "\nRace Results:\n";
$position = 1;
foreach ($raceResults as $racer => $finalPosition) {
    echo "$position. $racer\n";
    $position++;
}

// Function to display the race track and racers' positions
function displayRaceTrack($racers, $currentRacer, $position, $raceDistance)
{
    $trackWidth = 30; // Width of the track display

    echo "Race Track:\n";
    foreach ($racers as $r) {
        $racerPosition = round(($position / $raceDistance) * $trackWidth);
        if ($r === $currentRacer) {
            echo str_pad($r, $racerPosition, '_') . "X\n";
        } else {
            echo str_pad($r, $trackWidth, '_') . "\n";
        }
    }
    echo str_repeat('-', $trackWidth) . "\n";
    usleep(50000); // Delay for visualization purposes (0.05 seconds)
    echo "\033[2J\033[;H"; // Clear console for updated display
}
