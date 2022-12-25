<?php

class Signup extends Dbh {

    protected function setUser($user, $password, $email){
        $stmt = $this->connect()->prepare('INSERT INTO users (users_user, users_password, users_email) VALUES (?, ?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if($stmt->execute(array($user, $hashedPassword, $email))){
            $stmt = null;
            header("location: ../../public/inlog.php?error=none");
            exit();
        }

        $stmt = null;

    }

    protected function checkUser($user, $email){
        $stmt = $this->connect()->prepare('SELECT users_user FROM users WHERE users_user = ? OR users_email = ?;');

        if(!$stmt->execute(array($user, $email))){
            $stmt = null;
            header("location: ../../public/aanmelden.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        
        return $resultCheck;
    }

}