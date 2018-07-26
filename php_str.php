<?php
$str = "Hello world";
$str_len = strlen($str);
$str_word_count = str_word_count($str);
$strrev = strrev($str);
$strposition = strpos($str,"world");
$strreplace = str_replace("world","Hsun",$str);

echo "string:" . $str . "<Hr>";
echo "string length:" . $str_len ."<BR>";
echo "string word count:" . $str_word_count . "<BR>";
echo "string reverse: " . $strrev . "<BR>" ;
echo "string position: " . $strposition . "<BR>";
echo "string replace:" . $strreplace . "<BR>";




?>