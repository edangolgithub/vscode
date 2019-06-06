<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php
$u="qwerty";
$p="asdfgh";

$x=$_REQUEST["user-id"];
$a=$_REQUEST["qwer"];

if($x==$u && $a==$p)
{
echo"Wellcome to your account";
}
else 
{
    echo"Your email/user-ID or password is incorrect";
}

?>
</body>
</html>