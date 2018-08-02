<?php
$cookie_name = "test";
$cookie_value ="Glenn";
setcookie($cookie_name,$cookie_value,time()+86400,"/");
?>
<html>
<body>

<?php

if(!isset($_COOKIE[$cookie_name]))
{
    echo "cookie not set";
}
else
{
    echo "$cookie_name is set <br>";
    echo "value is $cookie_value";

}