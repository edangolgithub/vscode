<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
$nameErr = $passErr = "";
$fname = $pass = "";
if($_SERVER["POST"]){
  if(isset($_POST["fname"]))
  {
  $nameErr = "Name is required";
  }

  if(isset($_POST["pass"]))
  {
  $passErr = "password is required";
  }
}

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input type="text" class="form-control" name="fname" placeholder="enter your full name">
                      <span class="error"> <?php echo $nameErr;?></span>
                  </div>

                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" name="pass" placeholder="enter your password">
                      <span class="error"> <?php echo $passErr;?></span>
                    </div>
                
                </form>
     </div>
    </div>
</div>

</body>
</html>

