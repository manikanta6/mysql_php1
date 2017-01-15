
<?php


$dbconnect=array('server'=>'localhost','user'=>'root','pass'=>'mani','name'=>'amclub');
$db = new mysqli($dbconnect['server'],$dbconnect['user'],$dbconnect['pass'],$dbconnect['name']);


echo "<br>";
if($db -> connect_errno>0)
{
	echo "connection error".$db-> connect_errno;
}
?>

<?php
$sql = "select * from events inner join studreg on events.nameofclub=studreg.nameofclub and name='" . $_GET['username'] . "' and  password='" . $_GET['password'] . "' and events.nameofevent='" . $_GET['remove'] . "'";

$result = mysqli_query($db,$sql);

if (mysqli_num_rows($result) > 0) 

{
$sql = "delete from `events` where `nameofevent`='" . $_GET['remove'] . "'";

$result = $db->query($sql);

if (!$result) {
  
  echo "Deleting record failed: (" . $db->errno . ") " . $db->error;

}
header("location:amrita5.php");
}
else{
	echo " sorry, you cannot delete this event";
	?>
	<br>
<a  href="amrita5.php"><button type="submit">go back</button></a>
<?php
}
?>
