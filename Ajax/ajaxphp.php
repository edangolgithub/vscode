<div id="data">data comes here</div>

<button onclick="callajax()">get data</button>

<script>
  function callajax() {
    var ajax = new XMLHttpRequest();// create ajax variable
    ajax.open("GET", "data.php"); // mention method and url
    ajax.send(); // request
    ajax.onload=datahandler; // handle response data

    function datahandler() {
      //alert(ajax.responseText);
      document.getElementById("data").innerHTML=ajax.responseText;
    }
    
  }
</script>