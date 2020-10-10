<html>
<body>
<form action = "q2_send_mail.php" method = "POST">
 NAME : <input type = "text" name = "name" ><br><br>
 USERNAME : <input type = "text" name = "username" maxlength = "50"><br><br>
 FEEDBACK :<br> <textarea name = "feedback"></textarea><p><br>
 <input type = "submit" name = "s" value = "Send" maxlength = "300"><br>
</form>
</body>
</html>

<?php

if (isset($_POST['s']))
{
 $to = " "; //Enter administrators mail_id
 $sub = "Regarding Feedback";
 $name = $_POST['name'];
 $username = $_POST['username'];
 $feedback = $_POST['feedback'];
 $body = "Email sent from :\n\n$name\n\n$username\n\n$feedback";
 $headers = "From: $to";
 $headers1 = "From: $username";
 $msg = "Thank you for your feedback";
 mail($to,$sub,$body,$headers1);
 mail($username,$sub,$msg,$headers);
}

?>