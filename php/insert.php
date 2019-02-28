<?php
require_once "dataconnect.php";

$name=$_REQUEST["name"];
$address=$_REQUEST["address"];
$detail=$_REQUEST["detail"];


$sql="insert into costumer (costumername, costumeraddress,costumerdetail) values('$name','$address','$detail')";

$conn->query($sql);
$lastid=$conn->insert_id;

?>
<h1 id="o"><?php echo $lastid; ?></h1>
<script>

    alert(document.getElementById("o").innerHTML);
    alert("saved");
    window.location.href="tab.php";
</script>