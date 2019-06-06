<?php
session_start();


$uname="sadi";
$pass="abcd";


$username =$_REQUEST["username"];
$password=$_REQUEST["password"];

if($uname==$username && $pass==$password)
{
    $_SESSION["user"]=$username;
    $_SESSION["pass"]=$pass;


    header("Location: facebook.php");
  
}
else{
    header("Location: error.php");
}
exit();


?>