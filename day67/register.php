<html>
<body>
<form action: "register.php" method = "POST">
Enter your name: <input type = "text" name = "name"><br>
Enter username: <input type = "text" name = "username" ><br>
Enter password: <input type = "text" name = "password"><br>
Confirm password: <input type = "text" name = "confirmpass"><br>
<input type = "submit" name = "submit" value = "Register"><br>
</body>
</html>

<?php

require("conn.php");

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = md5($_POST['confirmpass']);
  
  echo "Registered!";

  $write = "INSERT INTO register VALUES('','$name','$username','$password')";
  if ($connect->query($write)===TRUE)
  {
    echo "done";
  }
  else
  {
    echo $write.$connect->error;
  }
}

$connect->close();
?>