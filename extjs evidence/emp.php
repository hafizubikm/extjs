<?php 
mysql_connect("localhost","root","");
mysql_select_db("extjs");
$sql="Select * from emp";
$arr=array();
$rs=mysql_query($sql);

while($obj=mysql_fetch_object($rs))
{
$arr[]=$obj;
}
echo '{Sucess: true, rows: '.json_encode($arr).'}';
?>