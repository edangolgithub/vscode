<?php
$id=0;
if($_GET)
{
    if(!empty($_GET['id']))
    {
        $id=$_GET['id'];
    }
}
$con=mysqli_connect("localhost","root","","school");
if($con->connect_error)
{
    die("loaded unsuccessfully");
}
$del="delete from product where productid='".$id."'";
$result=$con->query($del);
?>
<script language="javascript">
alert("deleted successfully");
window.location.href="copy.php";

</script>













?>