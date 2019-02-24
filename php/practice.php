<?php 
$con=mysqli_connect("localhost","root","","jiwan");
if($con->connect_error)
{
    die("unsuccessfully loaded");

}
$set=$con->prepare("insert into student(")









?>