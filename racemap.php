<?php
$pageTitle = "Race Map";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Races 2023 Map</title>
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
        }
        h1 {
            margin: 0;
            font-size: 28px;
        }
        #map {
            height: 800px;
            width: 80%;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        #instructions {
            text-align: center;
            max-width: 600px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body>

<header>
    <h1>F1 Races 2023 Map</h1>
</header>

<div id="instructions">
    <h2>How to Use</h2>
    <p>Explore the map to see the locations of F1 races happening in 2023. Each marker represents a race.</p>
    <p>Click on a marker to view the race details.</p>
</div>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    const races = [
        { location: [48.8566, 2.3522], name: 'French Grand Prix' },
        { location: [51.5099, -0.1335], name: 'British Grand Prix' },
        { location: [45.5017, -73.5673], name: 'Canadian Grand Prix' },
        { location: [35.6895, 139.6917], name: 'Japanese Grand Prix' },
        { location: [40.7128, -74.0060], name: 'United States Grand Prix' },
        { location: [-37.8136, 144.9631], name: 'Australian Grand Prix' },
        { location: [55.7558, 37.6176], name: 'Russian Grand Prix' },
        { location: [-23.5505, -46.6333], name: 'Brazilian Grand Prix' },
        { location: [28.6139, 77.2090], name: 'Indian Grand Prix' },
        { location: [48.8566, 2.3522], name: 'French Grand Prix' },
        { location: [51.5099, -0.1335], name: 'British Grand Prix' },
        { location: [45.5017, -73.5673], name: 'Canadian Grand Prix' },
        { location: [35.6895, 139.6917], name: 'Japanese Grand Prix' },
        { location: [40.7128, -74.0060], name: 'United States Grand Prix' },
        { location: [-37.8136, 144.9631], name: 'Australian Grand Prix' },
        { location: [55.7558, 37.6176], name: 'Russian Grand Prix' },
        { location: [-23.5505, -46.6333], name: 'Brazilian Grand Prix' },
        { location: [28.6139, 77.2090], name: 'Indian Grand Prix' },
        { location: [1.3521, 103.8198], name: 'Singapore Grand Prix' },
        { location: [41.9028, 12.4964], name: 'Italian Grand Prix' },
        // Add more races as needed
    ];

    const map = L.map('map').setView([0, 0], 2);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    races.forEach(race => {
        L.marker(race.location).addTo(map)
            .bindPopup(`<b>${race.name}</b>`)
            .openPopup();
    });
</script>

</body>
</html>

<?php
include "view-footer.php";
?>
