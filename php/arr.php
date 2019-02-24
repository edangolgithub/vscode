<?php
$n=4;
$int=array(
array(25,24,23,22),
array(20,19,18,17),
array(15,14,13,12),
array(10,9,8,7)

);
    for($i=0;$i<4;$i++)
{
    
    for($j=0;$j<$n;$j++)
    {
        echo $int[$i][$j];
       
    }
    echo "<br />";
    $n--;
}


?>