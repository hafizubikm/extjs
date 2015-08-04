<?php
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
mysql_connect('localhost','root','');
mysql_select_db('extjs');
$query="insert into emp(empname,address,email)values('".$name."','".$address."','".$email."')";
$result=mysql_query($query);
?>