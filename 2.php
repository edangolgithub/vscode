<?php
$a=$_REQUEST["username"];
$b=$_REQUEST["password"];

$x="asdfg";
$y="hjkl;";

if($a==$x && $b==$y)
{
    echo "you are successfully login";
}

else{
    echo "username or password is incorrect";
}

?>
