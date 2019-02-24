<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
    function app(str)
  {
      if(str.length==0)
      {
          document.getElementById("a").innerHTML="";
            return;
      }
      else{
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=final();
      }
      xmlhttp.open("get","hint.php",true);
      xmlhttp.send();
  }  
  function final()
  {
      if(this.readyState==4 && this.status==200)
      {
          document.getElementById("a").innerHTML=this.responseText;
      }
  }
    </script>
</head>
<body>
<p>THIS IS ALL ABOUT AJAX</p>
<form>
<input type="text" name="name" onkeyup="app(this.value)"/>
</form>
<h3 id="a"></h3>
</body>
</html>