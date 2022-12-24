<?php

if(isset($_POST["submit"])){

    // Grabbing the data
    $user = $_POST["user"];
    $password = $_POST["password"];

    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($user, $password);

    // Running error handlers and user signup
    $login->loginUser();

    // Going to back to front page
    header("location: ../../public/index.php?error=none");
}