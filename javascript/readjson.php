<script>
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        data=JSON.parse(this.responseText);
        alert(data.website);
        //document.getElementById("txt").innerHTML = this.responseText;
      }
    }
   
    xmlhttp.open("GET", "jsonfile.txt");
    xmlhttp.send();
    </script>
<p id="txt">
<?php
$myObj=null;
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;

$obj = json_decode($myJSON);
echo $obj->name;
?>
</p>