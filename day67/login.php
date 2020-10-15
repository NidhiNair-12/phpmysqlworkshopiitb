<html>
<body>
<form action = "login.php" method = "POST">
Enter Username: <input type = "text" name = "username"><br>
Enter password: <input type = "password" name = "password"><br>
<input type = "submit" name = "login" value = "Login">
</form>
</body>
</html>

<?php
require("conn.php");
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
if($username && $password)
{
  $password = md5($password);
  $select = "SELECT * FROM register where username='$username' and encryptedpass='$password'";
  $res = mysqli_query($connect,$select);
  if (mysqli_num_rows($res)>0)
  {
    while($row = mysqli_fetch_assoc($res))
    {
      $dbusername = $row['username'];
      $dbpassword = $row['encryptedpass'];
    }
    if($username==$dbusername && $password==$dbpassword)
    {
	echo "logged in successfully <a href = 'marks.php'>CLICK</a>here to see scores";
    $_SESSION['username']==$dbusername;
    }
    else
        echo ("Enter valid username and password");
  }
}

?>