<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

include 'config.php';

//$query = "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}');";
//$r = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')" or die (mysql_error());

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crudAppProj1/add.php");

mysqli_close($conn);

?>
