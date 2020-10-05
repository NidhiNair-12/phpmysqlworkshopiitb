<?php

$mat1=array(array(10,12),array(23,44));
$mat2=array(array(5,6),array(7,8));

echo "Matrix Addition of given matrices is:<br>";
for ($i=0;$i<2;$i++)
{
    for ($j=0;$j<2;$j++)
    {
        echo $mat1[$i][$j]+$mat2[$i][$j]."  ";  
    }
    echo "<br>";
}
?>