<?php 
$mysqli=new mysqli('localhost','root','','productdb');
$query="Select * from employee";
$arr=array();
$q=$mysqli->query($query);

while($obj=$q->fetch_object())
{
$arr[]=$obj;
}
echo '{Sucess: true, rows: '.json_encode($arr).'}';
?>