<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootsrap/css/bootstrap.css" rel="stylesheet" >
    <style>
    #abc{
        width:500px;
        border:1px inset red;
        text-align:center;
        margin:100px;
        padding:20px;
    }
    </style>
</head>
<body>
 <div id="abc">
     <h3>Login To Facebook</h3>
<form action="process.php" class="form">
    <div class="form-group">
   
    <input type="text" class="form-control" name="username" placeholder="User Name">
  </div>
  <div class="form-group">
   
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>  
</body>
</html>