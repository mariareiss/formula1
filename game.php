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

$trackLength = 5; // Length of the track
$raceDistance = 30; // Total distance of the race

$raceResults = []; // Array to store race results

foreach ($racers as $racer) {
    $position = 0; // Starting position
    for ($distance = 0; $distance < $raceDistance; $distance += $trackLength) {
        $speed = rand(80, 120); // Randomize speed
        $position += $speed; // Update position
        echo "$racer at $distance km\n";
        usleep(500000); // Delay for visualization purposes (0.5 seconds)
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
