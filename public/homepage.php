<?php 

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
        <title>Homepage</title>
    </head>

    <body>
        <header id="header">
            <nav>
                <ul>
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="inlog.php">Pikmin</a></li>
                    <li><a href="inlog.php">Pokémon</a></li>
                    <li><a href="inlog.php">Mario Kart</a></li>
                </ul>
                <a class="header_login" href="inlog.php" >INLOGGEN</a>
            </nav>
        </header>
        <main>
            <section>
            <h1>Artikelen</h1>
            <article class="box">
                <a href="inlog.php">
                    <figure>
                        <img src="./beheer/IMG/Pikminbloom3.webp"
                            alt="Verschillende kleine wezens (pikmin) in verschillende kleuren.">
                    </figure>
                    <section>
                        <h2>Pikmin Bloom</h2>
                        <p>Pikmin Bloom is out and my verdict is in! Check hier wat ik van de game vind</p>
                    </section>
                </a>
            </article>
            <article class="box">
                <a href="inlog.php">
                    <figure>
                        <img src="./beheer/IMG/pokemon2.webp"
                            alt="De twee hoofdrol pokemon spelers met allemaal pokémon in een grot.">
                    </figure>
                    <section>
                        <h2>Pokémon Remakes</h2>
                        <p>De pokémon Sinnoh Remakes zijn uit! Welke starter kies jij?</p>
                    </section>
                </a>
            </article>
            <article class="box">
                <a href="inlog.php">
                    <figure>
                        <img src="./beheer/IMG/mariokart2.webp" alt="Mario en zijn vrienden op een race track.">
                    </figure>
                    <section>
                        <h2>Mario Kart 8 Deluxe</h2>
                        <p>Race jij iedereen de baan uit?</p>
                    </section>
                </a>
            </article>
            </section>
        </main> 
        <a class="top" href="#header">Top</a>
        <footer>
            <p>Gemaakt door: Ian & Dani</p>
        </footer>
    </body>

    </html>
