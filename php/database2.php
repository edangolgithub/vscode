<?php
$mysqli = new mysqli("localhost","root","","school");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT costumerid,costumername,costumeraddress,costumerdetail where costumerid=?";


echo "<table>";
echo "<tr>";
echo "<th>costumerid</th>";
echo "<td>" . $cid . "</td>";
echo "<th>costumername</th>";
echo "<td>" . $cname . "</td>";
echo "<th>costumeraddress</th>";
echo "<td>" . $adr . "</td>";
echo "<th>costumerdetail</th>";
echo "<td>".$detail."</td>";
?>