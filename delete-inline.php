<?php
 include "config.php";
 $stu_id = $_GET['sid'];
$sql = "delete from student where sid = {$stu_id}";
$result= mysqli_query($conn,$sql) or die("motwork");

header("Location:http://localhost/crud/index.php");
mysqli_close($conn);


?>