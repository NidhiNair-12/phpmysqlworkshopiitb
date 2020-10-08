<html>
<body>
<p></p>
<form action="q1.php" method="POST">
Enter your name: <input type="text" name="name"><br>
Subject 1 marks: <input type="number" name="Sub1"><br>
Subject 2 marks: <input type="number" name="Sub2"><br>
Subject 3 marks: <input type="number" name="Sub3"><br>
Subject 4 marks: <input type="number" name="Sub4"><br>
Subject 5 marks: <input type="number" name="Sub5"><br>
<input type="submit" value="Submit" name="b1"/>
</form>
</body>
</html>

<?php

require("conn.php");

if(isset($_POST['b1']))
{
 echo "Name of Student:";
  $name = $_POST['name'];
  echo $name."<br>";
 echo "Marks in Each Subject:<br>";
 echo "Subject 1: ";
  $Sub1 = $_POST['Sub1'];
  echo $Sub1."<br>";
 echo "Subject 2: ";
  $Sub2 = $_POST['Sub2'];
  echo $Sub2."<br>";
 echo "Subject 3: ";
  $Sub3 = $_POST['Sub3']; 
  echo $Sub3."<br>";
 echo "Subject 4: ";
  $Sub4 = $_POST['Sub4'];
  echo $Sub4."<br>";
 echo "Subject 5: ";
  $Sub5 = $_POST['Sub5'];
  echo $Sub5."<br>";
 echo "Total Marks Obtained: ";
 $tot = $Sub1+$Sub2+$Sub3+$Sub4+$Sub5;
 echo $tot."<br>";
 echo "Percentage: ";
 $per = (($Sub1+$Sub2+$Sub3+$Sub4+$Sub5)/5);
 echo $per."%.<br>";

$write = "INSERT INTO class1 VALUES('','$name','$Sub1','$Sub2','$Sub3','$Sub4','$Sub5','$tot','500','$per')";
if ($connect->query($write)===TRUE)
{
 echo "Successfully Created";
}
else
{
 echo $write.$connect->error;
}

}
$connect->close();

?>