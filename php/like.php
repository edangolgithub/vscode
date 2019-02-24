<?php

include "dataconnect.php";

$insert="insert into likes(likes)values(1)";
$conn->query($insert);



echo "you liked this";