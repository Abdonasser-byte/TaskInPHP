<?php
    include 'queryloginfunc.php';
    include 'User.php';
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $ret=new finduer($_POST['username'],$_POST['password']);
        if($ret->GetAuthociateion()==true){
            $UserHome = new info();
            $UserHome = $UserHome->GetUserInfo($_POST['username']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="username" name="username" placeholder="Enter You IDName">
        <input type="password" name="password" placeholder="Enter Your Password">
        <input type="submit" name="submit" value="Login"/>
    </form>
</body>
</html>