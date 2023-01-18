<?php


include "dbh.classes.php";

$rights = new Dbh;

$connectRights = $rights->connect();


function rightCheck() { 
    global $connectRights;

        $rightCheck = intval($_SESSION["userrights"]);
    
        if ($rightCheck > 0){
            echo "aaa"; // admin
        }
        else{
            echo "bbb"; // user
        }
    return $rightCheck;
}




?>