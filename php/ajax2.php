<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<script>
function handle()
{
    
    if(this.readyState==4 && this.status==200)
    {
      
        document.getElementById("a").innerHTML = this.responseText;
    }
}
function handleajax(){
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=handle;
    ajax.open("GET","ajax.txt",true);
    ajax.send();
}
</script>

</head>
<body>
<button onclick="handleajax()" >ajax magic</button>
    <h1 id="a"></h1>
</body>
</html>