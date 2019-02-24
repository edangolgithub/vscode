<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
<body>
<?php
include "dataconnect.php";
$name=$address=$detail="";
$id=0;
if($_GET)
{
$id=$_GET['id'];
$sql = "SELECT * FROM costumer where costumerid=".$id;

$result = $conn->query($sql);
 $row=$result->fetch_assoc();
 $name=$row['costumername'];
 $address=$row['costumeraddress'];
 $detail=$row['costumerdetail'];
}
elseif($_POST)
{
    $n=$_POST['name'];
    $a=$_POST['address'];
    $d=$_POST['detail'];
    $stmt = $conn->prepare("update costumer set costumername=?, costumeraddress=?, costumerdetail=? where costumerid=?");
  $stmt->bind_param("sssi", $name, $address, $detail,$id);

// set parameters and execute
$name =$n;
$address = $a;
$detail = $d;
$id=$_POST['id'];

$stmt->execute();
    $conn->close();
?>
<script language="javascript">
    alert("updated");
    window.location.href = "tab.php"
</script>
<?php

}
?>




<div class="container">
  <h2>update</h2>
  <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="<?php echo $name;?>"  name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $address;?>" id="address" name="address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="detail">detail:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $detail;?>" class="form-control" id="detail" name="detail">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    <input type= "hidden" name="id" value="<?php echo $id;?>" />
  </form>
</div>

</body>
</html>
