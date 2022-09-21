<?php
require_once 'DataBaseQuery.php';
class info
{
    private $nameid ="", $email ="", $date="" , $firstname="" ,$lastname="" ,$phonenumber="" ;
    use DBQuery;
    public function SetUserNameid($NameId)
    {
        $ret =$this->ValidUserNameId($NameId);
        if($ret == true){
            $this->nameid = $NameId;
            return true;
        }
        else return false;
    }
    public function SetPoneNumber($Phone)
    {
        $this->phonenumber = $Phone;
    }
    public function SetDate( $DateBrith){
        $this->date = $DateBrith;
    }
    public function SetFirstName($firstname){
        $this->firstname=$firstname;
    }
    public function SetLastName($Lastname){
        $this->lastname=$Lastname;
    }
    public function SetEmail($Email){
        $this->email=$Email;
    }
    public function GetEmail(){
        return $this->email;
    }
    public function GetFirstName(){
        return $this->firstname;
    }
    public function GetLastName(){
        return $this->lastname;
    }
    public function GetNameid(){
        return $this->nameid;
    }
    public function GetDateBirth(){
        return $this->date;
    }
    public function GetPhone()
    {
        return $this->phonenumber;
    }
}