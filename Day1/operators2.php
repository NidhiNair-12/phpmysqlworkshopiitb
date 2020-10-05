<?php

$num1 = 5 ;
$num2 = 10 ;

switch($num1)
{
case ($num1>$num2):
    echo "$num1 is greater than $num2";
    break;
case ($num1<$num2):
    echo "$num1 is smaller than $num2";
    break;
default:
    echo "Both the numbers are equal";
}

?>