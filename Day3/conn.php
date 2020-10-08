<?php

$connect = new mysqli("localhost","root","","result") or die("connection failed");

echo "connecting...<br>";

if ($connect->connect_error)
{
 die("connection failed : " . $connect->connect_error);
}
else
{
 echo "connected! <br>";
}


?>