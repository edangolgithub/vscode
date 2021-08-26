add php
<?php
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";
$dbname = "aroon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// prepare and bind
$stmt = $conn->prepare("INSERT INTO student (name, grade, age) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $_REQUEST["uname"], $_REQUEST["gr"], $_REQUEST["age"]);


$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>