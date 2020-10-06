<html>

<form action = 'special_variables_html.php' method='GET'>
	<input type = 'text' name='side_1'><br>
	<input type = 'text' name='side_2'><br>
	<input type = 'text' name='side_3'><br>
	<input type = 'submit' value = 'Click here'>
</form>

</html>

<?php

$a = $_GET['side_1'];
$b = $_GET['side_2'];
$c = $_GET['side_3'];

switch($a)
{
case ($a==$b && $b==$c):
	echo "It is an Equilateral Triangle.";
	break;

case ($a==$b || $b==$c || $a==$c):
	echo "It is an Isosceles Triangle.";
	break;

case (($a^2+$b^2)==$c^2 || ($a^2+$c^2)==$b^2 || ($b^2+$c^2)==$a^2):
	echo "It is an Right Angled Triangle.";

default:
	echo "<br>It is a Scalene Triangle.";
	break;
}

?>