<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";
$dbname = "aroon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$q=$_REQUEST['name'];
$sql="SELECT * FROM student WHERE Name = '".$q."'";
$result = $conn->query($sql);

echo "<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Grade</th>
<th>Age</th>

</tr>";
    while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row['studentid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['grade'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";

  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>