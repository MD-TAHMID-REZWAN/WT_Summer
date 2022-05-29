<?php

$num1=$_POST["number1"];
$number1=(float)$num1;
echo" your 1st no: "  .$number1;

$num2=$_POST["number2"];
$number2=(float)$num2;
echo" , your 2nd no: "  .$number2;

$button=$_POST["button"];


if($button=="+")
{
    echo " , answer is [" .$number1 + $number2."]";
}
if($button=="-")
{
    echo " , answer is [" .$number1 - $number2."]";
}

if($button=="*")
{
    echo " , answer is [" .$number1 * $number2."]";
}

if($button=="/")
{
    echo " , answer is [" .$number1 / $number2."]";
}

?>