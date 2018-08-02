<?php
session_start();
?>

<html>
<body>
<?php

$_SESSION["name"] = "hsun";
$_SESSION["weight"] = "71.9";
$_SESSION["height"] = "168";

echo "session is set";

?>
</body>
</html>