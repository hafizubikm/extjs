<?php
$uname=$_GET['name'];
$mysqli=new mysqli('localhost','root','','dbuser');
$query="select * from tbluser where uname='".$uname."'";
$rst=$mysqli->query($query);
$row=mysqli_num_rows($rst);

if($row>0){
echo 'Already exist';
}

else{
echo 'avalilable for you';
}


?>