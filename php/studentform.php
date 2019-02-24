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

?>
<h1></h1>
    <div class="container">
        <h2>Horizontal form</h2>
        <form class="form-horizontal" action="insert.php" method="get">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name"
               placeholder="Enter Name" name="name">
               
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-10">          
              <input type="txt" class="form-control" id="address"
               placeholder="Enter Address" name="address">
              
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="detail">Detail:</label>
            <div class="col-sm-10">          
              <input type="txt" class="form-control" id="detail"
               placeholder="Enter Detail" name="detail">
              
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