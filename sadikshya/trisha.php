
<?php 
$u="trisha";
$p="12345";


$a=$_REQUEST["username"];
$b=$_REQUEST["qwer"];

if($a==$u && $b==$p)
{
echo "successfully logged in";
}
else{
    echo "user name or password is not correct";
}






?>
