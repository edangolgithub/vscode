<?php
require_once "dataconnect.php";
$sql = "SELECT * FROM likes";
$result = $conn->query($sql);
$n = $result->num_rows;
//$n = mysqli_num_rows($result);

echo $n." Peoples like this";

?>