<?php
$conn;
function RunINfirst()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DataBaseName = "Project";
    $conn1 = new mysqli($servername, $username, $password, $DataBaseName);
    if ($conn1->connect_errno) {
        die("Connection failed: " . $conn1->connect_error);
    }
    $GLOBALS['$conn']=$conn1;
}
function connection()
{
    return $GLOBALS['$conn'];
}
