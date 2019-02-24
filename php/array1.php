<?php
$con=new mysqli("localhost","root","","school");
if($con->connect_error){
    die("unsucessful");
}
$apple="select * from product";
$result=$con->query($apple);
?>
<table>
<tr>
<th>productid</th>
<th>productname</th>
<th>price</th>
</tr>
<?php
while($row=$result->fetch_assoc())
{
?>
<tr>
<td><?php echo $row["productid"]."<br>"; ?></td>
<td><?php echo $row["productname"]."<br>"; ?></td>


<td><?php echo $row["price"]."<br>"; ?></td>




</tr>
<?php
}

?>
</table>