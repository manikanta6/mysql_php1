<?php
include 'connect.php';
?>



<?php


$sql = "select * from  `studreg` where `name`='" . $_GET['username'] . "' and  `password`='" . $_GET['password'] . "'";

// $result = $db->query($sql);

//$row = mysqli_fetch_assoc($result);
//$size = $row['COUNT(*)'];

//$size = mysqli_num_rows($result);

$result = mysqli_query($db,$sql);
     // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
      
     // $size = mysqli_num_rows($result);


if (mysqli_num_rows($result) == 1) {

$sql = "select * from  `studreg` where `name`='" . $_GET['username'] . "'";
$result = $db->query($sql);
$corr = $result->fetch_object();
$pass = $corr->password;

if($pass==$_GET['password'])
{
	?>
	<p><h1>upcoming events</h1></p>
	<?php  
$sql = "select * from `events` order by nameofclub";
$result=$db->query($sql);
?>

<form action="mentor.php" method="get">
  <h2>
    Select the option, To know the details of the club 
  </h2>
	<select name="name">
  <option>face</option>
  <option>ecif</option>
  <option>vidyuth</option>
   <option>lakhani</option>
  <option>anc</option>
    <option>sankya</option>

</select>
  <button type="submit">submit</button>
</form>

<table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align:left" >
		<th style="width:150px">name of club</th>
		<th style="width:150px">name of event</th>
		
		<th style="width:150px">hall</th>
		<th style="width:150px">datee</th>
	</tr>
	<?php

while($row=$result->fetch_object())
{
	
    $event=htmlentities($row->nameofevent,ENT_QUOTES,"UTF-8");
	$name=htmlentities($row->nameofclub,ENT_QUOTES,"UTF-8");	
	$hall=htmlentities($row->hall,ENT_QUOTES,"UTF-8");
	$datee=htmlentities($row->date,ENT_QUOTES,"UTF-8");
    ?>

<tr>
	<td><?php echo $name;?></td>
	<td><?php echo $event;?></td>
    <td><?php echo $hall;?></td>
	<td><?php echo $datee;?></td>
</tr>
<?php
}
?>

</table>
<p> <h1>To upload an event</h1></p>
<form action="insert.php" method="get">
<table border="1" cellpadding="2" cellspacing="0">

	<tr style="text-align:left" >
		
		<th style="width:150px">nameofclub</th>
		<th style="width:150px">nameofevent</th>
		<th style="width:150px">hall</th>
		<th style="width:150px">date</th>
		
	</tr>
	<tr>
	   
		<td ><input type="text" name="name"></td>
		<td ><input type="text" name="event"></td>
		<td ><input type="text" name="hall"></td>
		<td ><input type="text" name="date"></td>
	</tr>
	</table>
<button type="submit">SUBMIT</button>
	
	</form>

	<p><h2>to cancel an event</h2></p>
	<form action="delete.php" method="get">
	
	username:<input type="text" name="username" placeholder="username"><br><br>
    password<input type="text" name="password" placeholder="password"><br><br>


		Eventname:<input type="text" name="remove">

		<button type="submit">submit</button>
	</form>


<?php
}
else
{
	echo "incorrect username and password";
}
}
else
{
	echo "incorrect username and password";
}


?>
