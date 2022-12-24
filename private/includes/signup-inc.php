<?php

if(isset($_POST["submit"])){

    // Grabbing the data
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($user, $password, $email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page
    header("location: ../../public/index.php?error=none");
}