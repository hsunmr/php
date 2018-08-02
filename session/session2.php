<?php 
session_start();
?>

<html>
<body>
<?php
if(empty($_SESSION["name"])|| (empty($_SESSION["weight"])) ||(empty($_SESSION["height"])))
    echo "session not set";
else
{
    echo "Hello," . $_SESSION["name"]. " <br>";
    echo "your weight is " . $_SESSION["weight"] . "<br>";
    echo "your height is " . $_SESSION["height"] . "<br>";
}
?>
</body>
</html>