<html>
<head>
<title>offwork</title>
</head>
<body>

<?php
date_default_timezone_set("Asia/Taipei");
$now = date("h:i:sa");
$offtime = "18:00";

$lasttime = (strtotime($offtime) - strtotime($now));
$lasthour = floor($lasttime/60/60);


$lastmin = $lasttime/60;
while ($lastmin >=60)
{
    $lastmin -=60;
}
$lastmin = floor($lastmin);
echo $lasthour . ":" . $lastmin;
?>
</body>
</html>