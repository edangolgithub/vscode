
<?php

if(!isset($_COOKIE['user'])) {
  echo "Cookie named user is not set!";
}
 else
  {
    $user=$_COOKIE['user'];
  echo "Cookie user is set!<br>";
  echo "Value is: " . $user;
}
?>