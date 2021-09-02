<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["username"] = "aroon";
$_SESSION["password"] = "secret";
echo "Session variables are set.";
?>

</body>
</html>