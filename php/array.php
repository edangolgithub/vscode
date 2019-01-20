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

$a=array("apple","ball","cat");
echo "<ol>";
echo "<li>".$a[0]."</li>";

echo "</ol>";
?>
<ul>
<li><?php echo $a[0]; ?></li>
<li><?php echo $a[1]; ?></li>
<li><?php echo $a[2]; ?></li>
</ul>

<?php

$len=count($a);
for ($i=0; $i <$len ; $i++) { 
   // echo $a[$i]."<br>";
}

$b=array(1=>"ram",2=>"hari",3=>"shyam");

echo $b[1];

foreach ($b as $x => $y)
 {
    echo $x."=>".$y."<br>";
}



?>
</body>
</html>