<html>
<body>
<p></p>
<form action="special_variables_html2.php" method="POST">
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
if(isset($_POST['b1']))
{
 echo "Name of Student:";
 echo $_POST['name']."<br>";
 echo "Marks in Each Subject:<br>";
 echo "Subject 1: ";
 echo $_POST['Sub1']."<br>";
 echo "Subject 2: ";
 echo $_POST['Sub2']."<br>";
 echo "Subject 3: ";
 echo $_POST['Sub3']."<br>";
 echo "Subject 4: ";
 echo $_POST['Sub4']."<br>";
 echo "Subject 5: ";
 echo $_POST['Sub5']."<br>";
 echo "Total Marks Obtained: ";
 echo $_POST['Sub1']+$_POST['Sub2']+$_POST['Sub3']+$_POST['Sub4']+$_POST['Sub5']."<br>";
 echo "Percentage: ";
 echo (($_POST['Sub1']+$_POST['Sub2']+$_POST['Sub3']+$_POST['Sub4']+$_POST['Sub5'])/5)."%.<br>";
}?>