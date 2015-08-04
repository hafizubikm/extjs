<?php
$mysqli=new mysqli('localhost','root','','productdb');
$query="insert into employee(empname,address,email) values('".$_POST['name']."','".$_POST['address']."','".$_POST['eemail']."')";
$q=$mysqli->query($query);
?>