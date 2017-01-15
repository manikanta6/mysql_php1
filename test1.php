<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="color1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>
<body id="main" >
	<p align="center"><h1>THE DIFFERENT TECHNICAL WINGS</h1></p>
	<form id="one" action="/amrita3.php" method="post">
	pick the club:
		<select name="club">
		<optgroup label="technical">
			<option value="face" selected="selected">face</option>
			<option value="ecif">ecif</option>
			<option value="sankya">sankya</option>
			<option value="vidyuth">vidyuth</option>
			</optgroup>
			s
		</select>
	pick the hall:
	       <select name="hall">
	       	<option value="krishna" selected="selected">krishna</option>
			<option value="rama">rama</option>
			<option value="amritaya">amritaya</option>
	       </select>
			

	<p>	<label>date:</label>
		<input type="datetime-local" name="date" /><br></p>
		
	</form>
	<p>
	<label>description:</label>
	<input type="text" name="data"></p>

   <input type="submit"/>
	
</body>
</html>