<?php
$id=0;
if($_GET)
{
    if(!empty($_GET['id']))
    {
     $id=$_GET['id'];
    }
}
require_once "dataconnect.php";

$sql = "delete from costumer where costumerid='".$id."'";

$result = $conn->query($sql);


?>
<script language="javascript">
    alert("deleted");
    window.location.href = "tab.php"
</script>