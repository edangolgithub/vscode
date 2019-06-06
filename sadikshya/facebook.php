<?php
session_start();
echo "welcome to facebok";

if(isset($_SESSION["user"]))
{
    echo "<h3>"."your user name is ".$_SESSION["user"];
}

?>