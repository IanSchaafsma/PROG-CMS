<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./beheer/css/style.css">
    <title>Mario Kart 8 Deluxe</title>
</head>

<body>
    <header id="header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pikmin.php">Pikmin</a></li>
                <li><a href="Pearl.php">Pokémon</a></li>
                <li class="active"><a href="Mariokart.php">Mario Kart</a></li>
            </ul>
            <?php 
                    if(isset($_SESSION["userid"]))
                    {
                ?>        
                    <p class="header_user"><?php echo $_SESSION["useruser"]; ?></p>
                <?php
                    }
                    else
                    {
                ?>
                    <p class="header_user">none</p>
                <?php
                    }
                ?>
        </nav>
    </header>
    <main>
        <article>
            <h1>Mario Kart 8 Deluxe haalt Mario Kart Wii in en is bestverkopende game uit de serie!</h1>
            <figure>
                <img src="./beheer/IMG/mariokartt.webp" alt="Foto van de al bekende mario in een race auto.">
                <figcaption>
                    🏎️ Race iedereen de baan uit
                    <a
                        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nintendo.nl%2FGames%2FWii-U%2FMario-Kart-8-765384.html&psig=AOvVaw2HW8_H65U3h0ypFBlpTU7t&ust=1641934820547000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCID-zv-JqPUCFQAAAAAdAAAAABAQ">Bron</a>
                </figcaption>
            </figure>
            <p>
                Mario Kart 8 Deluxe is een enorm succes.
                Nintendo heeft <a id="raport" href="https://www.nintendo.co.jp/ir/pdf/2021/211104_4e.pdf">een financieel
                    rapport</a> gedeeld van het tweede kwartaal van het fiscale jaar.
                Daar is in te lezen dat Mario Kart 8 Deluxe 38,74 miljoen keer is verkocht.
                Daarmee heeft het Mario Kart Wii ingehaald dat in totaal 37,38 miljoen over de toonbank ging.
            </p>
            <p>
                De game is zelfs vaker verkocht dan Animal Crossing: New Horizons.
                Die game is inmiddels 34,85 miljoen keer verkocht.
            </p>
            <p>
                Hieronder de Theme song van het spel.
                <audio src="./beheer/audio/MarioSoundtrack.mp3" controls></audio>
                <a href="https://www.youtube.com/watch?v=E2U5GoX4dew&ab_channel=DavidBosch">Bron</a>
            </p>
            <p>
                Mario Kart 8 kwam uit in mei 2014 voor de Wii U en werd in april 2017 geport naar Nintendo Switch en
                kreeg de naam Mario Kart 8 Deluxe.
                Nintendo heeft een enorm sterke tijd achter zich.
                In het afgelopen half jaar zijn er 8,3 miljoen Nintendo Switches verkocht en daarmee zijn er in totaal
                93 miljoen Switches over de toonbank gegaan.
            </p>
            <figure>
                <img src="./beheer/IMG/mariocharacters.webp" alt="Afbeelding van het character selectie scherm">
                <figcaption>
                    Hier zie je het character select scherm met alle character die in het spel zitten.
                    <a
                        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.polygon.com%2Fmario-kart-8-deluxe-guide%2F2017%2F4%2F27%2F15445610%2Funlockables-gold-kart&psig=AOvVaw3k3rGPIALQ05hHLYYnCtYX&ust=1641937071989000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNC027KSqPUCFQAAAAAdAAAAABAD">Bron</a>
                </figcaption>
            </figure>
            <p>
                In Mario Kart 8 Deluxe race je op 48 circuits en zorg je met power-ups ervoor dat jij de eerste plek
                overneemt.
                Race als je favoriete Nintendo karakter,
                je hebt er meer dan 30 om uit te kiezen.
                Nieuw in deze Mario Kart is de 200cc mode.
                Laat je tegenstanders uitglijden over jouw bananenschillen in de nieuwe battle modus,
                zodat hun ballonnen kapot klappen.
                Deze game speel je met maximaal 12 personen.
            <p id="videotje">
                🏎️ Ben je benieuwd hoe de gameplay eruit ziet? Kijk dan deze trailer.
                <a id="a2" href="https://www.youtube.com/watch?v=tKlRN2YpxRE&ab_channel=Nintendo">Bron</a>
                <video poster="./beheer/IMG/MarioBanner.webp" controls>
                    <source src="./beheer/video/mariotrailer.mp4" type="video/mp4">
                </video>
            </p>
            <p>
                Deze website is gemaakt voor het aanleren van basis HTML en is gebaseerd op een bestaand artikel,
                aangevuld met eigen teksten.
                <a
                    href="https://nl.ign.com/nintendo-switch/133903/news/mario-kart-8-deluxe-haalt-mario-kart-wii-in-en-is-bestverkopende-game-uit-de-serie">Bron</a>
            </p>
        </article>
    </main>
    <a class="top" href="#header">Top</a>
    <footer>
        <p>Gemaakt door: Ian & Dani</p>
        <?php 
                        if(isset($_SESSION["userid"]))
                        {
                    ?>        
                        <a href="../private/includes/logout.inc.php">Log out</a>
                    <?php
                        }
                        else
                        {
                    ?>
                        <a href="#">Log out</a>
                    <?php
                        }
                    ?>
    </footer>
</body>

</html>