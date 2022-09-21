<?php
include 'User.php';
class CreateNewuser extends info
{
    private $password;
    public function SetPassword($pass)
    {
        $this->password=$pass;
    }
    public function Getpass(){
        return $this->password;
    }
    public function Create(CreateNewuser $var){
        $this->AddNewUser($var);
    }
}