O<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
function validnumber()
{
    var data=document.getElementById("sar").value;
    if(isNaN(data))
    {
        alert("input data is not number");
    }
    else if(data>120)
    {
        alert("you cannot live for soo long!");
    }
    else if(data<1)
    {
        alert("you are  0 years old how can you use computer!!");
    }
    else{
        alert("goood age now get married soon!!");
    }
}
        function validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "sarmila") {
              alert("Name cannot be sarmila");
              return false;
            }
            else
            {
                alert("form submitted succesfully!!");
            }
          }

    </script>
    <form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" 
          onsubmit="return validateForm()"
     method="post">
        Name: <input type="text" name="fname">
        <input type="submit" value="Submit">
        </form>

        <input type="text" id="sar"/>
        <button onclick="validnumber()">valid check</button>
</body>
</html>