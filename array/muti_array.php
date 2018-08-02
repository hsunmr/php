<?php

$student = array
(
    array("glenn","168","71"),
    array("fu","175","72"),
    array("dixon","172","64")

);
echo "name\theight\tweight<BR>";
for($i=0;$i <3;$i++)
{
    for($j=0;$j <3;$j++)
    {
        echo $student[$i][$j] . "\t";
    }
    echo "<BR>";
}
?>