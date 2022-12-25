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
    <title>Pokémon Remakes</title>
</head>

<body>
    <header id="header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pikmin.php">Pikmin</a></li>
                <li class="active"><a href="Pearl.php">Pokémon</a></li>
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
            <h1>De pokémon Diamond en Pearl Remakes zijn uit!</h1>
            <figure>
                <img src="./beheer/IMG/pokemon1.webp" alt="De twee hoofdrol spelers met allerlei pokémon in een grasvlakte">
                <figcaption>
                    💎 De twee hoofdrol spelers met allerlei pokémon in een grasvlakte
                    <a
                        href="https://interreviewed.com/pokemon-bdsp-trailer-shows-amity-square-and-other-features/">Bron</a>
                </figcaption>
            </figure>
            <p>
                In ruim twintig jaar tijd is Pokémon uitgegroeid tot een van de grootste gamereeksen op aarde.
                De serie heeft inmiddels honderden miljoenen euro's opgebracht en jaarlijks worden nog steeds nieuwe
                games uitgebracht,
                waarin weer nieuwe monstertjes gevangen moeten worden.
            </p>
            <p>
                Die games werden afgelopen jaren vaker kritisch ontvangen.
                Fans balen van een gebrek aan vernieuwing,
                terwijl tegelijkertijd oude functies worden weggehaald.
                Bij het voorgaande Pokémon Sword en Shield werden zelfs klassieke monsters uit de eerste generaties
                weggehaald.
            </p>
            <p>
                Hieronder een soundtrack van de game.
                <audio src="./beheer/audio/PokemonBDSP_Dawn.mp3" controls></audio>
                <a href="https://www.youtube.com/watch?v=yrqiSiq8N6I&ab_channel=VideoGameMusicResources">Bron</a>
            </p>
            <p>
                Met Pokémon Brilliant Diamond en Shining Pearl wordt weinig gedaan om die kritiek weg te nemen.
                Dit is wederom een klassieke Pokémon,
                waarin je acht Gym Leaders moet verslaan om aan een toernooi mee te doen waar je tot Pokémon-kampioen
                uitgeroepen kan worden.
            </p>
            <p>
                Het is geen wonder dat deze spellen zo dicht bij de ouderwetse kern blijven,
                want beide zijn remakes van titels die in 2006 werden uitgebracht voor de Nintendo DS.
                En bij deze herziene versies is de basis van die klassiekers grotendeels gelijk gebleven.
            </p>
            <p>
                Dat is duidelijk te zien aan de spelwereld.
                De natuurlijk ogende personages uit Sword en Shield zijn ingeruild voor een soort Furby's met
                gigantische hoofden.
                Dat oogt gek,
                maar die spelfiguren zijn precies even groot als de pixelachtige personen uit het origineel.
                De gestileerde stijl laat de makers de originele spelwereld een-op-een nabouwen.
            </p>
            <p>
                Je merkt dat de spellen vaak worstelen tussen hun klassieke oorsprong en andere,
                modernere Pokémon-games.
                Dat valt bijvoorbeeld op tijdens gevechten,
                waarbij de gekke speelgoedpersonages ineens worden omgeruild voor de langere,
                realistischere helden die we van recente games kennen.
                De makers durven niet te kiezen tussen twee stijlen,
                waardoor het geheel nooit echt samenkomt.
            </p>
            <p id="videotje">
                💎 Ben je benieuwd hoe de gameplay eruit ziet? Kijk dan deze trailer.
                <a id="a2" href="https://www.youtube.com/watch?v=1pDI8Scph44&ab_channel=IGN">Bron</a>
                <video poster="./beheer/IMG/poster2.webp" controls>
                    <source src="./beheer/video/PokémonTrailer.mp4" type="video/mp4">
                </video>
            </p>
            <h4>
                Conclussie
            </h4>
            <p>
                Pokémon Brilliant Diamond en Shining Pearl zijn twee oerconservatieve remakes van twee wat ouderwets
                aanvoelende Pokémon-games.
                Een leuke nostalgietrip voor iedereen die met de originele versies is opgegroeid,
                maar nieuwkomers zullen snel afhaken.
            </p>
            <p>
                Deze website is gemaakt voor het aanleren van basis HTML en is gebaseerd op een bestaand artikel,
                aangevuld met eigen teksten.
                <a
                    href="https://www.nu.nl/reviews/6168321/review-pokemon-brilliant-diamond-en-shining-pearl-zijn-vooral-heel-ouderwets.html">Bron</a>
            </p>
        </article>
    </main>
    <a class="top" href="#header">Top</a>
    <footer>
        <p>Gemaakt door: Ian & Dani</p>
    </footer>
</body>

</html>