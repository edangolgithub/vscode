
<?php

if($_POST)
{
echo $_POST["pwd"];
}




?>
<form action="<?php echo $_SERVER['PHP-SELF'];?>" method="post" >
<input type="email" class="form-control" id="email"
               placeholder="Enter email" name="email">
               <input onblur="pas()" type="password" class="form-control" id="pwd"
               placeholder="Enter password" name="pwd">
               <span id="error"></span>
               <button type="submit" class="btn btn-default">Submit</button>
</form>
<script>
function isUpperCase(myString) { 
  return (myString == myString.toUpperCase()); 
} 
    function pas()
    {
         var numc=0;
         var up=0;
         var pass=document.getElementById("pwd").value;
for(var i=0;i<pass.length;i++)
{
    if(parseInt(pass[i]))
    {
      numc++;
    }
    else if(pass[i].valueOf()==pass[i].toUpperCase().valueOf())
    {
        
      up++;
      
        
      
    }
}
if(numc>0||up>0)
{
    alert(up);
    document.getElementById("error").innerHTML="";
    document.getElementById("error").style.color="red";
}
else
{
    
    document.getElementById("error").innerHTML="error";
    document.getElementById("error").style.color="red";
}
    }
    </script>