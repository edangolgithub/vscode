<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM costumer";

$result = $conn->query($sql);
?>

<a href="studentform.php" ><button class="btn btn-primary">New </button></a>   
<table class="table table-condensed">
        <thead class="thead-dark">
          <tr>
            <th>name</th>
            <th>address</th>
            <th>detail</th>
            <th colspan='2'>actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
    while($row = $result->fetch_assoc()) {
       ?>
          <tr>
            <td><?php echo $row['costumername']; ?></td>
            <td><?php echo $row['costumeraddress'];?></td>
            <td><?php echo $row['costumerdetail'];?></td>
            <td><a href="updatetab1.php?id=<?php echo $row['costumerid']; ?>"><button class="btn btn-warning">update</button></a></td>
            <td><a href="delete.php?id=<?php echo $row['costumerid']; ?>"><button class="btn btn-danger">delete</button></a></td>
          </tr>
          <?php
           }
$conn->close();
?>
        </tbody>
      </table>
</body>
</html>