<?php

class SignupContr extends Signup{

    private $user;
    private $password;
    private $email;

    public function __construct($user, $password, $email){
        $this->user = $user;
        $this->password = $password;
        $this->email = $email;
    }

    public function signupUser(){
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../../public/aanmelden.php?error=emptyinput");
            exit();
        }

        if($this->invalidUser() == false) {
            // echo "Invalid username!";
            header("location: ../../public/aanmelden.php?error=username");
            exit();
        }

        if($this->userMatch() == false) {
            // echo "Username or email taken!";
            header("location: ../../public/aanmelden.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->user, $this->password, $this->email);
    } 

    private function emptyInput(){
        $result;
        if(empty($this->user) || empty($this->password) || empty($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    } 

    private function invalidUser(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->user)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    } 

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    } 

    private function userMatch(){
        $result;
        if(!$this->checkUser($this->user, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    } 

}