<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hi welcome '
    <?php echo $_GET['email']; ?> '
    <br />
    your password is :
    <?php echo $_GET['password']; ?>
<br>
    your gender is :

    <?php echo $_GET["gender"] ;?>
    <br>
    you are born on 
    <?php echo $_GET["day"]; ?>

</body>
</html>