<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 7 - Profile</title>
    <link rel="stylesheet" href="Exercise.css">
    <script src="Exercise.js"></script>
</head>
<body>
    <?php
    echo '<section class="team">';
        echo '<h1 class>MEET OUR TEAM</h1>';
        echo '<h2 class="group"><span class="accent">GROUP </span>7</h2>';
        echo '<h2 style="color:white;"> This is Group 7\'s Team Profile HTMl file. This group consists of five (5) members listed below with their photo</h2>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<div class="team-members">';
        
            echo '<div class="member">';
                echo '<img src="Arciaga.jpg" alt="arciaga">';
                echo '<h2 onmouseover="mouseOverArciaga()" onmouseout="myMouseOut()" class="name" id="arciaga"><span class="accent">ARCIAGA,</span> ANTONIO III G. </h2>';
                echo '<p class="description">The incumbent president of IT3G and the Executive Secretary of PLMun Celestial Esports. A former 2nd Year Representative of BSIT Society, a minor organisation under the College of Information Technology and Computer Studies. A proactive student who\'s willing to learn more from people and trying to explore beyond expectations and capabilities. </p>';
            echo '</div>';
        
            echo '<div class="member">';
                echo '<img src="Arnillo.jpg" alt="arnillo">';
                echo '<h2 onmouseover="mouseOverArnillo()" onmouseout="myMouseOut()" class="name" id="arnillo"><span class="accent">ARNILLO, </span>MIKAELA JOY</h2>';
                echo '<p class="description">I would describe myself as an open and honest person who doesn\'t believe in misleading other people and tries to be fair in everything I do. An idividual that seeks more knowledge and learning from obeserving, knowing and seeing other\'s perspective.</p>';
            echo '</div>';
        
            echo '<div class="member">';
                echo '<img src="Narag.jpg" alt="narag">';
                echo '<h2 onmouseover="mouseOverNarag()" onmouseout="myMouseOut()" class="name" id="narag"><span class="accent">NARAG, </span>MARIELLE ANDREA</h2>';
                echo '<p class="description">I am an active and curious individual. One of many rules I live by, a Russian proverb that says “trust, but verify”</p>';
            echo '</div>';
        
            echo '<div class="member">';
                echo '<img src="Narvadez.png" alt="narvadez">';
                echo '<h2 onmouseover="mouseOverNarvadez()" onmouseout="myMouseOut()" class="name" id="narvadez"><span class="accent">NARVADEZ, </span>EDSON MARK</h2>';
                echo '<p class="description">I\'m a determined individual who works hard to achieve what I want. I make decisions thoughtfully and stay focused on my personal goals</p>';
            echo '</div>';  

            echo '<div class="member">';
                echo '<img src="Reginio.jpg" alt="reginio">';
                echo '<h2 onmouseover="mouseOverReginio()" onmouseout="myMouseOut()" class="name" id="reginio"><span class="accent">REGINIO, </span>GENICA DRAZELE</h2>';
                echo '<p class="description">I have my own uniqueness which I embrace and proudly show it to everyone.</p>';
            echo '</div>';
        
        echo '</div>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<h2 style="color:#08542f;">Group 7 - 2024-2024</h2>';
        echo '</section>';
    ?>
</body>
</html>