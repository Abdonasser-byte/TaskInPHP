<?php
include 'CreateNewUser.php';
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $newone = new CreateNewuser();
    while($newone->SetUserNameid($_POST['username'])!=true){
        header("Location: Signin.html");
    }
    $newone->SetEmail($_POST['Email']);
    $newone->SetDate($_POST['BirsthDate']);
    $newone->SetFirstName($_POST['firstname']);
    $newone->SetLastName($_POST['lastname']);
    $newone->SetPoneNumber($_POST['PhoneNumber']);
    $newone->SetPassword($_POST['password']);
    $newone->Create($newone);
    header("Location: Login.php");
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
        <input type="username" name="username" placeholder="Enter You IDName"><br>
        <input type="username" name="firstname" placeholder="Enter You FirstName"><br>
        <input type="username" name="lastname" placeholder="Enter You LastName"><br>
        <input type="Date" name="BirsthDate" placeholder="Enter You BirthDate"><br>
        <input type="email" name="Email" placeholder="Enter You Email"><br>
        <input type="number" name="PhoneNumber" placeholder="Enter You PhoneNumber"><br>
        <input type="password" name="password" placeholder="Enter Your Password"><br>
        <input type="submit" name="submit" value="SigIN" />
    </form>
</body>

</html>