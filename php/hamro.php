<?php

$string = file_get_contents("a.json");

$result = json_decode($string, true);
foreach ($result as $row ) {
   echo $row["costumername"];
}
?>