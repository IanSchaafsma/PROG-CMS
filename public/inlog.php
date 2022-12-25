<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./beheer/css/style.css">
    <title>Inloggen</title>
</head>
<body class="login">
    <form class="form" method="post" action="../private/includes/login-inc.php">
        <h2 class="login__h2">Inloggen</h2>
        <div>
            <label class="form__text" for="user">Naam</label>
            <input class="form__box" type="text" name="user" placeholder="Naam" id="user" required>
        </div>
        <div>
            <label class="form__text" for="password">wachtwoord</label>
            <input class="form__box" type="password" name="password" placeholder="Wachtwoord" id="password" required>
        </div>
        <input class="form__submit" type="submit" name="submit" value="Log in">
        <a class="form__link" href="aanmelden.php">Nog geen account? Aanmelden</a>
    </form>
</body>
</html>