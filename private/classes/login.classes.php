<?php

class Login extends Dbh {

    protected function getUser($user, $password){
        $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_user = ? OR users_email = ?;');

        if(!$stmt->execute(array($user, $password))){
            $stmt = null;
            header("location: ../../public/inlog.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../../public/inlog.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]["users_password"]);

        if($checkPassword == false){
            $stmt = null;
            header("location: ../../public/inlog.php?error=wrongpassword");
            exit();
        }
        elseif($checkPassword == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_user = ? OR users_email = ? AND users_password = ?;');

            if(!$stmt->execute(array($user, $user, $password))){
                $stmt = null;
                header("location: ../../public/inlog.php?error=stmtfailed");
                exit();
            }
        
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../../public/inlog.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruser"] = $user[0]["users_user"];

            $stmt = null;
        }

        $stmt = null;

    }

}