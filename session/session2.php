<?php 
session_start();
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "hsunmr0823@gmail.com","From: webmaster@example.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error


?>

<html>
<body>
<?php
if(empty($_SESSION["name"])|| (empty($_SESSION["weight"])) ||(empty($_SESSION["height"])))
    trigger_error("session not set",E_USER_WARNING);
else
{
    echo "Hello," . $_SESSION["name"]. " <br>";
    echo "your weight is " . $_SESSION["weight"] . "<br>";
    echo "your height is " . $_SESSION["height"] . "<br>";
}
?>
</body>
</html>