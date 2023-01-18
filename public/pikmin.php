<?php 
    session_start();
    require "../private/cms/upload.php";
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
    <title>🌱 Pikmin Bloom 🌱</title>
</head>

<body>
    <header id="header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="pikmin.php">Pikmin</a></li>
                <li><a href="Pearl.php">Pokémon</a></li>
                <li><a href="Mariokart.php">Mario Kart</a></li>
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
            <h1>🌻 Pikmin Bloom is uit</h1>
            <figure>
                <img src="../private/cms/uploads<?php print($img); ?>" alt="">
                
                <figcaption>
                    🌱 Pikmin zijn kleine vrolijke wezens,
                    kleur de hele wereld tot een mooie tuin!
                    <a
                        href="https://i0.wp.com/marsadtv.com/wp-content/uploads/2021/11/Pikmin-Bloom-New-Game-From-Pokemon-Go-Developer-Launched-for.jpeg?fit=1200%2C675&ssl=1">Bron</a>
                </figcaption>
            </figure>
            <p>
                Pikmin zijn kleine wezentjes in verschillende kleuren,
                met boven hun hoofd een zaadje dat langzaam uitgroeit tot een bloem.
                In de Pikmin-games van Nintendo gebruik je een leger aan Pikmin om planeten te ontdekken,
                voorwerpen te verzamelen en vijanden te verslaan om terug te keren naar huis.
                In Pikmin Bloom vervullen de wezentjes een iets andere rol. Hoewel je ook in deze game Pikmin verzameld,
                dienen ze nu vooral om de wereld wat kleur te geven en bloemen te laten opbloeien.
            </p>
            <p>
                Hieronder een bekende soundtrack van een eerdere Pikmin game.
                <audio src="./beheer/audio/pikminOst.mp3" controls></audio>
                <a href="https://www.youtube.com/watch?v=eMd5GUGGH4M&list=PL177585733449249C&index=1">Bron</a>
            </p>
            <p>
                Tijdens het wandelen verzamel je steeds meer Pikmin,
                die als een soort mini-leger achter je aan lopen.
                Door naar plekken te wandelen, kun je nieuwe Pikmin ontdekken.
                Tijdens het wandelen wordt je pad gevormd met bloemen.
                Ook andere spelers laten zo een bloemenpad achter,
                waardoor er uiteindelijk een soort tuin ontstaat.
                De Pikmin kunnen tijdens je wandeling ook voorwerpen verzamelen,
                die je kunt bekijken via de app.
                Op een kaart zie je dan waar je allemaal gewandeld hebt.
            </p>
            <figure>
                <img src="./beheer/IMG/pikminbloom2.webp" alt="Afbeelding van het spel">
                <figcaption>
                    🌱Drie screenshots van Pikmin Bloom.
                    Links zie je de player met een item.
                    In het midden een level screen en rechts het aantal stappen.
                    <a
                        href="https://www.iphonefirmware.com/wp-content/uploads/2021/10/Handson-Pikmin-Bloom-is-a-delightful-way-to-get-your-steps-in-even-if-youre-not-a-Nintendo-fan-iphonefirmware-com.png">Bron</a>
                </figcaption>
            </figure>
            <p>
                Het uiteindelijke doel is dus om de wereld te laten bloeien met planten,
                simpelweg door te wandelen.
                Je kan ook foto’s maken met je Pikmin en bijhouden in een soort dagboek.
                Al met al willen Nintendo en Niantic wandelen leuker maken.
                Spelers in Singapore en Australië kunnen Pikmin Bloom vanaf nu downloaden.
                Niantic laat weten dat de game vanaf vandaag wereldwijd uitgerold wordt,
                hoewel niet bekend is hoe lang het duurt voordat Pikmin Bloom in Nederland te downloaden is.
            </p>
            <video poster="./beheer/IMG/poster.webp" src="./beheer/video/PikminBloom.mp4" controls></video>
            <p>
                Deze website is gemaakt voor het aanleren van basis HTML en is gebaseerd op een bestaand artikel,
                aangevuld met eigen teksten.
                <a href="https://www.iculture.nl/nieuws/pikmin-bloom-downloaden/">Bron</a>
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