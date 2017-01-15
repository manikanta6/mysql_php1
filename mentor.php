<?php


$dbconnect=array('server'=>'localhost','user'=>'root','pass'=>'mani','name'=>'amclub');
$db = new mysqli($dbconnect['server'],$dbconnect['user'],$dbconnect['pass'],$dbconnect['name']);


echo "<br>";
if($db -> connect_errno>0)
{
	echo "connection error".$db-> connect_errno;
}
//clubs.nameofclub,clubs.nameofsec,clubs.nameofcosec,mentor.m_name,mentor.dname
$sql = "select clubs.nameofclub,clubs.nameofsec,clubs.nameofcosec,mentor.m_name,mentor.dname from clubs inner join mentor on clubs.nameofclub=mentor.nameofclub and clubs.nameofclub='" . $_GET['name'] . "'";
$result=$db->query($sql);
?>

<table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align:left" >
		<th style="width:150px">name of club</th>
		<th style="width:150px">name of sec</th>
		<th style="width:150px">name of cosec</th>
		<th style="width:150px">name of mentor</th>
		<th style="width:150px">dname</th>
       	
	</tr>
	<?php
	if (!$db->query($sql)) {
    trigger_error('Database error: '. $db->error);
}

while($row=$result->fetch_object())
{
	
    $club=htmlentities($row->nameofclub,ENT_QUOTES,"UTF-8");
	$sec=htmlentities($row->nameofsec,ENT_QUOTES,"UTF-8");	
	$cosec=htmlentities($row->nameofcosec,ENT_QUOTES,"UTF-8");	
	$mentor=htmlentities($row->m_name,ENT_QUOTES,"UTF-8");
	$dname=htmlentities($row->dname,ENT_QUOTES,"UTF-8");
	//$join=htmlentities($row->joiningyear,ENT_QUOTES,"UTF-8");

    ?>

<tr>
	<td><?php echo $club;?></td>
	<td><?php echo $sec;?></td>
    <td><?php echo $cosec;?></td>
	<td><?php echo $mentor;?></td>
	<td><?php echo $dname;?></td>
	

</tr>
<?php
}
?>
</table>