<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$email = "linu@fjfd6564.co";

function checkemail1($email)
{
 $sycount=0;   $invalid=false;
    $atcount=0;
    $dotcount=0;
   for($i=0;$i<strlen($email);$i++) 
   {

    if(is_numeric($email[0])|| !(ctype_alpha($email[0])))
    {
       $invalid=true;
       break;
    } 
    if(!(ctype_alnum($email[$i])))
    {
      if($email[$i]=="@"||$email[$i]==".")
      {
          $invalid=false;
      }
      else{
       $sycount++;
      }
    }
    if($email[$i]=="@")
    {
        $atcount++;
    } 
    if($email[$i]==".")  
    {
        $dotcount++;
    }    
   }
   if($dotcount>1||$dotcount<1)
   {
     $invalid=true;
   
   }
   if($atcount>1||$atcount<1)
   {
     $invalid=true;
  
   }
   if($sycount>0)
   {
    $invalid=true;;
   }
   if($invalid==true)
   {
       echo "email invalid";
   }
   else{
       echo "email valid";
   }    
}
checkemail1($email);
?>
</body>
</html>