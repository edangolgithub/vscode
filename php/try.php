<?php
$con=new mysqli("localhost","root","","school");
if($con->connect_error)
{
die("unsucessfully loaded");
}
$apple="insert into costumer(costumername,costumeraddress,costumerdetail) values('cat','dog','elephant')";
$con->query($apple);
$ant="select * from costumer limit 5";
$result=$con->query($ant);
?>
<table>
<tr>
<th>costumername</th>
<th>costumeraddress</th>
<th>costumerdetail</th>
</tr>

<?php
while($row=$result->fetch_assoc()){
echo $row["costumerid"];


?>
<tr>
<td><?php echo $row["costumername"]; ?></td>
<td><?php echo $row["costumeraddress"]; ?></td>
<td><?php echo $row["costumerdetail"]; ?></td>
</tr>
<?php
}

?>
</table>

