<?php

//file read 
echo "<h2>readfile</h2>";
echo readfile("abc.txt") . "<BR><BR>";

echo "<h2>fgets</h2>";
$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}

$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
echo "<BR><BR><h2>fgetc</h2>";
echo fgetc($myfile) . " <BR>";
fclose($myfile);

//file create/write

$myfile = fopen("newfile.txt","w") or die("Unable to open file!");
echo "<BR><BR><h2>fwrite</h2>";
fwrite($myfile,"新增的字哦~~");
echo "create success";
fclose($myfile);



?>