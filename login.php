<?php
$connect=array('server'=>'localhost','user'=>'root','pass'=>'mani','name'=>'firstdb');
$db=new mysqli($connect['server'],$connect['user'],$connect['pass'],$connect['name']);
echo"<br>";
if($db-> maxdb_connect_errno>0)
{
	echo "connection failed".$db-> connect_errno;
}
$stmt= $db->prepare("insert into `logininfo` values(?,?)");
$stmt-> bind_param('ss',$_GET['uname'],$_GET['psw']);
$stmt-> execute();
$stmt-> close();







?>
