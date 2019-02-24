<?php

$str= $_GET['q'];
$rr=$_GET['r'];
echo $rr;
$names= array("anil","bikas","adil","chintu");

foreach ($names as  $value)
 {
    if($str[0]==$value[0])
    {
        echo $value;
    }
}



?>