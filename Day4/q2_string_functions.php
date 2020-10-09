<html>
<body>
<form action = "q2_string_functions.php" method = "POST">
Enter a random string: <input type = "text" name = "string" ><br>
<input type = "submit" name = "s" value = "Submit">
</form>
</body>
</html>

<?php

if (isset($_POST['s']))
{

 echo "Entered string : ";
 $strg = $_POST['string'];
 echo $strg."<br>";

 echo "Number of characters in the string : ";
 $length = strlen($strg);
 echo $length."<br>";

 $arr = explode(" ",$strg);
 echo "Breaking down the string into array : ";
 print_r($arr);
 echo "<br>";

 echo "Reverse of the string : ".strrev($strg)."<br>";
 
 echo "All alphabet to upper case : ".strtoupper($strg)."<br>";
 
 echo "All alphabet to lower case: ".strtolower($strg)."<br>";

 $substrg = "Rose"; 
 $sub = substr_replace($strg,$substrg,11,16);
 echo "Replaced string : $sub";
}

?>