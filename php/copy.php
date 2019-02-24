<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","school");
    if($con->connect_error)
    {
        die("connected not successfully");
    }
    $set="select * from product";
    
    $inst="insert into product(productname,price) value('apple','400')";
    $inst="insert into product(productname,price) value('banana','4400')";
    $inst="insert into product(productname,price) value('capicino','4300')";
    if($con->query($inst))
    {
        echo "inserted is successful";
    }
    else{
        echo "sorry try once";
    }
    $result=$con->query($set);

    ?>
    <table class=table table-hover>
        <tr>
            <th> productid</th>
                <th>productname</th>
                <th>price</th>
                <th colspan='2'>action</th>
           
        </tr>
        <?php
        while($row=$result->fetch_assoc())
        {
            ?>
            <tr>
                <td><?php echo $row['productid'];?></td>
                <td><?php echo $row['productname'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><button class="btn btn-process">update</button></td>
                <td><a href="drop.php?id=<?php echo $row['productid'];?>"><button class="btn btn-danger">delete</button></a></td>
            </tr>
            <?php
        }
        ?>




    </table>

    
</body>
</html>