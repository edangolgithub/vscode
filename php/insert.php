<?php
require_once "dataconnect.php";

$name=$_REQUEST["name"];
$address=$_REQUEST["address"];
$detail=$_REQUEST["detail"];


$sql="insert into costumer (costumername, costumeraddress,costumerdetail) values('$name','$address','$detail')";

$conn->query($sql);

?>

<script>
    alert("saved");
    window.location.href="tab.php";
</script>