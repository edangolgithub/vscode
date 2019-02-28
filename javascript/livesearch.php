<?php
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nepal";
$a[] = "Nepa";
$a[] = "Nepali";
$a[] = "Newar";
$a[] = "Neta";
$a[] = "Nestle";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

$val=$_REQUEST['q'];
if(strlen($val)<1)
{
    echo "enter something";
    return;
}
 foreach ($a as $v) {
    
    if(strtoupper($v[0])==strtoupper($val[0]))
    {
        
    if (stristr($v , $val)==true)
     {
        echo "<div>".$v."</div>";
}
    }
}



?>