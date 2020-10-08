<?php
require("conn.php");

$rec = "SELECT * FROM class1 WHERE name='Rohan'";
$res = $connect->query($rec);

if ($res->num_rows > 0)
 {

  while($row = $res->fetch_assoc()) 
  {
    $marks = $row['total_marks'];
    $oldSub5 = $row['Sub5'];
    $Sub5 = 99;
    $per = $row['per'];

    $marks = $marks- $oldSub5 + $Sub5;
    $per = (float)(($marks/500)*100);

    $update = "UPDATE class1 SET Sub5=$Sub5, total_marks=$marks, per='$per' WHERE name='Rohan'";
    if ($connect->query($update) === TRUE) {
            echo "Rohan's record updated <br><br>";
    } else {
            echo "Error updating record: " . $connect->error;
    }

    echo "Rohan, Subject 5: $Su5/100<br>Total Marks Obtained: $marks<br>Percentage: $per % <br>";
  }
} else {
  echo "0 results";
}
$connect->close();
?> 