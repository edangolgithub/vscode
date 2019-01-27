<?php

function abc($a,$b=90)
{

   return $a+$b;
}
function f1()
{
   echo "no param no return";
}
function f2()
{
   return "no param but return";
}
function f3($a,$b)
{
echo  "param take "."no return give";
}
function f4($a)
{
   return "param take return give";
}
echo f4(45);

?>
