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

$id=$_REQUEST['studentid'];

echo $id;

$sql = "DELETE FROM student WHERE studentid=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("i",$id);
$res=$stmt->execute();

header('Location: list.php');

?>