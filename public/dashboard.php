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
        <title>Homepage</title>
    </head>

    <body>
        <header id="header">
            <nav>
                <ul>
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="pikmin.php">Pikmin</a></li>
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
            <section>
            <h1>Dashboard</h1>
            </section>
            <section class="dashboardGrid">
                <article class="dashboardGridItem">
                <form action="pikmin.php" method="post" enctype="multipart/form-data">
                    <h2 class="db-1">Select image to upload:</h2>
                    <input class="db-2" type="file" name="fileToUpload" id="fileToUpload">
                    <input class="db-3" type="submit" value="Upload Image" name="submit">
                </form>
                </article>
            </section>
        </main> 
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
