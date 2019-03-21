<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

$_SESSION["favcolor"] = "yellow";
echo "Favorite color is changed " . $_SESSION["favcolor"] . ".<br>";
?>
</body>
</html>