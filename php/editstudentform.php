add html
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
<?php
$name=$_REQUEST["name"];
$grade=$_REQUEST["grade"];
$age=$_REQUEST["age"];
$studentid=$_REQUEST["studentid"];



?>
<div class="container">
  <h2>Edit Student</h2>
  
  <form action="editstudent.php"  method="POST">
    <div class="form-group">
     
        <input type="text" class="form-control" placeholder="ID" name="studentid" value="<?php echo $studentid ?>" />
        
      </div>
    <div class="form-group">
     
      <input type="text" class="form-control" placeholder="Name" name="uname" value="<?php echo $name ?>" >
      
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control" placeholder="Enter Grade" name="gr" value="<?php echo $grade ?>" >
     
    </div>
    <div class="form-group">
    
      <input type="text" class="form-control"  placeholder="Enter Age" name="age" value="<?php echo $age ?>" >
     
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

</body>
</html>
