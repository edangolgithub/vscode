<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .error{
        color:red;
        
      }
      </style>
</head>
<body>
<?php
// define variables and set to empty values
$n = $p=  "";


if ($_GET) 
{
  if (empty($_GET["email"])) {
    $n = "Name is required";
  } else {
  
  }

  if (empty($_GET["pwd"])) {
    $p = "password is required";
  } else {
   
  }


}
?>
<?php
// if($_POST)
// {
// $email=$_POST["email"];
// $password=$_POST["pwd"];

// echo $email.$password;
// }
?>
<h1></h1>
    <div class="container">
        <h2>Horizontal form</h2>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email"
               placeholder="Enter email" name="email">
               <span class="error">* <?php echo $n;?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd"
               placeholder="Enter password" name="pwd">
               <span class="error">* <?php echo $p;?></span>
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </div>
      
</body>
</html>