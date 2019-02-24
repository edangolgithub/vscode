
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
$id=0;
if($_GET)
{
    if(!empty($_GET['id']))
    {
     $id=$_GET['id'];
    }
}
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

$name=$row['costumername'];
?>
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label for="name">Email:</label>
      <input type="text" class="form-control" id="NAME" value="<?php echo $name; ?>"
       name="costumername">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>