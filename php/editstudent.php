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


$name=$_REQUEST["uname"];
$grade=$_REQUEST["gr"];
$age=$_REQUEST["age"];
$studentid=$_REQUEST["studentid"];
echo $studentid.$name.$grade.$age;
$sql="update student set name=?, grade=?, age=? where studentid=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii",$name,$grade,$age,$studentid);
$stmt->execute();
echo "success";

?>