<?php
include_once 'DBConnection.php';
trait DBQuery
{
    public function finduserfunc($name,$pass)
    {
        RunINfirst();
        $db=connection();
        $queryback = "select password from users where idname='$name';";
        $res = mysqli_query($db, $queryback);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_array($res);
            if ($pass == $row["password"]){  mysqli_close($db);return true;}
            mysqli_close($db);return false;
        } else {
            mysqli_close($db);
            return false;
        }
        
    }
    public function ValidUserNameId($NameId)
    {
        RunINfirst();
        $db=connection();
        $queryback = "select idname from users where idname='$NameId';";
        $res = mysqli_query($db, $queryback);
        if(mysqli_num_rows($res)>0)
        {
            mysqli_close($db);
            return True;
        }
        else
        {
            mysqli_close($db);
            return false;
        } 
    }
    public function AddNewUser(CreateNewuser $user)
    {
        RunINfirst();
        $db=connection();
        $username=$user->GetNameid();
        $pass=$user->Getpass();
        $firstname=$user->GetFirstName();
        $lastname=$user->GetLastName();
        $email=$user->GetEmail();
        $phone=$user->GetPhone();
        $date=$user->GetDateBirth();
        try{
        $querybackfromuserDB="insert into users values('$username','$pass');";
        mysqli_query($db,$querybackfromuserDB);
        $queryback = "insert into UserInfo values('$username',
        '$firstname','$lastname','$email','$phone',
        '$date');";
        mysqli_query($db, $queryback);
        mysqli_close($db);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function GetUserInfo($UseName){
        RunINfirst();
        $db=connection();
        $obj = new info();
        try{
        $querybackfromuserDB="select * from UserInfo where NameId = '$UseName';";
        $ret=mysqli_query($db,$querybackfromuserDB);
        if(mysqli_num_rows($ret)>0){
            while($row = $ret->fetch_array() ){
                $obj->SetUserNameid($row["NameId"]);
                $obj->SetDate($row["DateBirsth"]);
                $obj->SetEmail($row["Email"]);
                $obj->SetFirstName($row["FirstName"]);
                $obj->SetLastName($row["LastName"]);
                $obj->SetPoneNumber($row["PhoneNumber"]);
            }
            mysqli_close($db);
            return $obj;
        }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>