<?php
include 'DataBaseQuery.php';
class finduer{
    use DBQuery;
    private $name;
    private $pass;
    function __construct($name,$pass)
    {
        $this->name=$name;
        $this->pass=$pass;
    }
    function GetAuthociateion(){
        $ret = $this->finduserfunc($this->name,$this->pass);
        return $ret;
    }
}