

<?php


$dbconnect=array('server'=>'localhost','user'=>'root','pass'=>'mani','name'=>'amclub');
$db = new mysqli($dbconnect['server'],$dbconnect['user'],$dbconnect['pass'],$dbconnect['name']);

echo "<br>";
if($db -> connect_errno>0)
{
	echo "connection error".$db-> connect_errno;
}


/*
if(!empty($_post['name']))
{
	$name=$_post['name'];
	echo $name;
}
if(!empty($_post['event']))
{
	$eventname=$_post['event'];
}
if(!empty($_post['hall']))
{
	$hall=$_post['hall'];
}
if(!empty($_post['date']))
{
	$date=$_post['date'];
}
$sw= "insert into `clubname` (`name`,`eventname`,`hall`,`datee`) values($event,$name,$hall,$date)";
$db->query($sw);*/

$sql = "select * from  `events` where `date`='" . $_GET['date'] . "' and `hall`='" . $_GET['hall'] . "' ";


$result = mysqli_query($db,$sql);

if (mysqli_num_rows($result) == 1) {
	echo "date is already reserved please select another date";
	?>
	<br>
<a  href="amrita5.php"><button type="submit">go back</button></a>
<?php
}else
{


$stmt= $db->prepare("insert into `events` values(?,?,?,?)");
$stmt-> bind_param('ssss',$_GET['event'],$_GET['name'],$_GET['hall'],$_GET['date']);
$stmt-> execute();
$stmt-> close();
header("location:amrita5.php");
}
?>