<?php

class LoginContr extends Login{

    private $user;
    private $password;

    public function __construct($user, $password){
        $this->user = $user;
        $this->password = $password;
    }

    public function loginUser(){
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../../public/inlog.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->user, $this->password);
    } 

    private function emptyInput(){
        $result;
        if(empty($this->user) || empty($this->password)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    } 

}