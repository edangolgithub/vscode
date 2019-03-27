<?php
require_once "dataconnect.php";
$sql = "SELECT * FROM costumer";

$result = $conn->query($sql);
$customers["records"]=array();
while($row=$result->fetch_assoc())
{
    array_push($customers["records"],$row);
}

echo json_encode($customers["records"]);
// foreach ($cusomers["records"] as $key) {
//    echo $key["costumername"];
// }
?>