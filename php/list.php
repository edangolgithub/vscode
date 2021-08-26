<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
//list
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

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

?>


<div class="container mx-auto">
          
<diV class="m-2">
    <button class="btn btn-primary"> <a style="text-decoration:none; color:white" href="addstudent.html">Add Student</a></button>
</div>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Age</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
  
      <tr>
        <td><?php echo $row["studentid"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["grade"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td colspan=2>
          <button class="btn btn-warning mr-1">
          <a style="text-decoration:none; color:white" 
          href="editstudentform.php?studentid=<?php echo $row['studentid']; ?>&name=<?php echo $row['name']; ?>&grade=<?php echo $row['grade']; ?>&age=<?php echo $row['age']; ?>"
          
          > Edit</a>
          </button>
          <button class="btn btn-danger">Delete</button> 
        </td>      </tr>
      <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    </tbody>
  </table>
</div>

</body>
</html>