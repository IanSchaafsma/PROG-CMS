<?php 

session_start();
session_unset();
session_destroy();

header("location: ../../public/inlog.php?error=none");

