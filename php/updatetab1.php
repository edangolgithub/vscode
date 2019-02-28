<?php
require_once "dataconnect.php";

if($_GET)
{
$id= $_GET['id'];

$sql="select * from costumer where costumerid=?";
$sql = "SELECT * FROM costumer where costumerid=".$id;

$result = $conn->query($sql);
 $row=$result->fetch_assoc();
 $name=$row['costumername'];
 $address=$row['costumeraddress'];
 $detail=$row['costumerdetail'];
echo $name;
}
else
{
$sql="update costumer set costumername=?,costumeraddress=?,costumerdetail=? where costumerid=?";
$name=$_POST['name'];
$address=$_POST['address'];
$detail=$_POST['detail'];
$id=$_POST['id'];
$stmt=$conn->prepare($sql);
$stmt->bind_param("sssi",$name,$address,$detail,$id);
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