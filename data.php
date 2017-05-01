<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello World!"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
		    </td>
		    
		    
		</tr>
	</table>
	
	<?php

  
   
    $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
    if  ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }
     if($mysqli)
       echo "Connected";
$query="insert into  instructor values(2,'jetlee','jetlee@gmail.com','402 sunset Avenue Windsor','1970-03-24','1994-04-16',226260346)";
$result=$mysqli->query($query);
if($result)
echo "Success";
header("Location:Register.php");
?>

	

</body>
</html>
