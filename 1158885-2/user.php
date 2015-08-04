<?php
$uname=$_GET['name'];
$mysqli=new mysqli('localhost','root','','dbuser');
$q="select * from tbluser where uname='".$uname."'";
$rst=$mysqli->query($q);
$row=mysqli_num_rows($rst);

if($row>0){
echo 'Already taken';
}
else{
echo 'Available for registration';
}
?>