<?php
$dbconnect=array('server'=>'localhost','user'=>'root','pass'=>'mani','name'=>'amclub');
$db = new mysqli($dbconnect['server'],$dbconnect['user'],$dbconnect['pass'],$dbconnect['name']);


echo "<br>";

if($db -> connect_errno>0)
{
	echo "connection error".$db-> connect_errno;
}
?>