<?php
$pageTitle = "Insights";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 Tech Insights</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .section {
            margin-bottom: 30px;
        }

        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .infographic {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            margin: 20px 0;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            overflow: hidden;
            border-radius: 8px;
            margin: 20px 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
                  .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            margin: 10% auto;
            width: 80%;
            max-width: 700px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }
        }
    </style>
</head>
<body>

    <header>
        <h1>Formula 1 Tech Insights</h1>
    </header>

    <main>
<div class="section">
        <h2>Car Components</h2>
        <p>
            Formula 1 cars are engineering marvels with various high-tech components that contribute to their speed, agility, and performance on the track.
            Let's delve into some key car components that make these cars stand out.
        </p>

        <div class="component">
            <h3>Power Unit</h3>
            <p>
                The power unit is the heart of a Formula 1 car. It consists of a highly sophisticated hybrid system that combines a V6 turbocharged engine with energy recovery systems (ERS).
                The ERS includes the MGU-K (Motor Generator Unit - Kinetic) and MGU-H (Motor Generator Unit - Heat), recovering energy from braking and exhaust heat.
            </p>
            <div class="image-container">
                <img src="https://www.redbullracing.com/images/2023/05/RB19-power-unit-concept.jpg" alt="Power Unit">
            </div>
        </div>

        <div class="component">
            <h3>Braking System</h3>
            <p>
                The braking system in Formula 1 cars is highly advanced, utilizing carbon-ceramic disc brakes. The brake-by-wire system allows precise control over braking force, contributing to optimal performance during races.
            </p>
            <div class="image-container">
                <img src="https://www.mercedesamgf1.com/images/2023/06/20230628-w14-brakes-detail-high-res.jpg" alt="Braking System">
            </div>
        </div>

        <div class="component">
            <h3>Chassis</h3>
            <p>
                The chassis is the main structure of the car, providing stability and support for various components. It is typically made of carbon fiber to ensure a lightweight yet durable design.
            </p>
            <div class="image-container">
                <img src="https://www.mclaren.com/images/team/2023/car/mcl36/monocoque.jpg" alt="Chassis">
            </div>
        </div>

        <div class="component">
            <h3>Tires</h3>
            <p>
                Formula 1 tires are specially designed to withstand high speeds and intense forces. The tires play a critical role in the car's grip, handling, and overall performance on different track surfaces.
            </p>
            <div class="image-container">
                <img src="https://www.pirelli.com/motorsports/en-eu/f1/gallery/2023/tyre-compounds-f1-2023-grand-prix-schedule.jpg" alt="Tires">
            </div>
        </div>
    </div>

<div class="section">
    <h2>Aerodynamics</h2>
    <p>
        The aerodynamics of a Formula 1 car are finely tuned to maximize speed, stability, and performance. 
        Various aerodynamic elements, such as wings, diffusers, and bargeboards, contribute to the overall design.
    </p>

    <div class="component">
        <h3>Front Wing</h3>
        <p>
            The front wing is a crucial aerodynamic element responsible for managing airflow around the front of the car. 
            It plays a key role in providing downforce and influencing the car's balance during different driving conditions.
        </p>
        <div class="image-container">
            <img src="https://www.formula1.com/en/latest/technical/2023/02/1966542.jpg" alt="Front Wing">
        </div>
    </div>

    <div class="component">
        <h3>Rear Wing</h3>
        <p>
            The rear wing is designed to balance the downforce generated by the front wing. 
            It influences the car's speed and stability, especially during high-speed sections of the track.
        </p>
        <div class="image-container">
            <img src="https://www.autoweek.com/wp-content/uploads/2023/06/F1-Miami-2023-rear-wing-complexity-explained.jpg" alt="Rear Wing">
        </div>
    </div>

    <div class="component">
        <h3>Diffuser</h3>
        <p>
            The diffuser is positioned at the rear of the car and helps accelerate the airflow underneath, creating a low-pressure area. 
            This enhances downforce and contributes to overall aerodynamic efficiency.
        </p>
        <div class="image-container">
            <img src="https://www.motorsport.com/f1/news/f1-diffusers-explained-why-they-are-crucial-in-generating-downforce-5532540/images/1735531968.jpg" alt="Diffuser">
        </div>
    </div>

    <div class="component">
        <h3>Bargeboards</h3>
        <p>
            Bargeboards are vertical aerodynamic elements located on the side of the car. 
            They play a role in managing airflow around the side pods and contribute to overall aerodynamic stability.
        </p>
        <div class="image-container">
            <img src="https://www.motorsport.com/f1/news/f1-bargeboards-explained-what-are-they-and-why-are-they-important-4943866/images/1016935056.jpg" alt="Bargeboards">
        </div>
    </div>
</div>

<div class="section">
    <h2>Innovations in Formula 1</h2>
    <p>
        Formula 1 is a hotbed of technological innovation, driving advancements in automotive engineering. 
        Teams constantly push the boundaries, introducing groundbreaking technologies that eventually make their way into road cars.
    </p>

    <div class="component">
        <h3>Hybrid Power Units</h3>
        <p>
            Formula 1 introduced hybrid power units, combining a V6 turbocharged engine with energy recovery systems. 
            This innovation enhances fuel efficiency and performance while reducing environmental impact.
        </p>
        <div class="image-container">
            <img src="https://www.motorsport.com/f1/news/f1-power-units-explained-history-and-technology-5532534/images/1735531923.jpg" alt="Hybrid Power Unit">
        </div>
    </div>

    <div class="component">
        <h3>Energy Recovery Systems (ERS)</h3>
        <p>
            ERS includes components like the MGU-K (Motor Generator Unit - Kinetic) and MGU-H (Motor Generator Unit - Heat). 
            These systems recover and store energy during braking and from the heat of the exhaust, providing additional power when needed.
        </p>
        <div class="image-container">
            <img src="https://www.motorsportmagazine.com/articles/f1/f1-explained-the-subtle-genius-of-the-energy-recovery-system" alt="Energy Recovery Systems">
        </div>
    </div>

    <div class="component">
        <h3>Aerodynamic Innovations</h3>
        <p>
            Formula 1 teams invest heavily in aerodynamic research, leading to innovations in wing design, diffusers, and bargeboards. 
            These advancements enhance overall performance, speed, and stability on the track.
        </p>
        <div class="image-container">
            <img src="https://www.caranddriver.com/motorsports/news/g43603366/f1-2023-aero-changes-explained-explained/image/7933877748.jpg" alt="Aerodynamic Innovations">
        </div>
    </div>

    <div class="component">
        <h3>Materials Science</h3>
        <p>
            Materials science plays a crucial role in Formula 1, with teams utilizing lightweight yet strong materials such as carbon fiber for chassis construction. 
            These materials enhance performance and safety in racing cars.
        </p>
        <div class="image-container">
            <img src="https://www.f1fanatic.com/en/news/f1-car-technology/the-science-behind-f1-s-carbon-fiber-revolution/289468" alt="Materials Science">
        </div>
    </div>
</div>

    </main>

<script>
        // JavaScript for image slideshow
        let slideIndex = 0;

        function showSlides() {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }

        // JavaScript for video modal
        function openModal(videoSrc, captionText) {
            document.getElementById("modal").style.display = "block";
            document.getElementById("video").src = videoSrc;
            document.getElementById("caption").innerHTML = captionText;
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
            document.getElementById("video").src = "";
        }

        document.addEventListener("DOMContentLoaded", function() {
            showSlides();
        });
    </script>

</body>
</html>


<?php
include "view-footer.php";
?>
