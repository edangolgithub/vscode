<?php
setcookie("user", "suresh", time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE["user"])) 
{
    echo "Cookie named  is not set!";
} 
else 
{
   
    echo "Value is: " . $_COOKIE["user"];
}


//setcookie("user", "", time() - 3600);



?>
