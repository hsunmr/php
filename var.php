<?php 

    $pokemon ="妙蛙種子";


    echo $pokemon . "使用藤編<br>";
    echo $pokemon . "使用飛葉快刀<br>";
    echo $pokemon . "使用寄生種子<br>";
    echo "<hr>";

    $height = 168;
    $weight = 71.4;

    $BMI = $weight / ($height/100 * $height/100) ;

    echo "Your height is" . $height . "<BR>";
    echo "Your weight is" . $weight . "<BR>";
    echo "Your BMI = " . $BMI ."<BR>";

    if($BMI < 18.5)
    {
        echo "體重過輕";
    }else if($BMI<24 )
    {
        echo "正常";        
    }else if($BMI<27)
    {
        echo "過重";        
    }else if($BMI<30)
    {
        echo "輕度肥胖";        
    }else if($BMI<35)
    {
        echo "中度肥胖";        
    }else{
        echo "重度肥胖";        
    }
     

?>