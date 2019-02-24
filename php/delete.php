<?php
$id=0;
if($_GET)
{
    if(!empty($_GET['id']))
    {
     $id=$_GET['id'];
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "delete from costumer where costumerid='".$id."'";

$result = $conn->query($sql);


?>
<script language="javascript">
    alert("deleted");
    window.location.href = "tab.php"
</script>