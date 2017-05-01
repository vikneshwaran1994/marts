<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="logstyle.css">

  
</head>

<body>
  <body>
  
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			
			<form action="login.php" method="POST">
				<div class="control-group">
				<input type="text" class="login-field" name="name" value="" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" name="password" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input name="submit" id="submit"  value="Log In!" type="submit"> 
				<a class="login-link" href="Register.php">Not Registered yet?</a>
			</form>
		</div>
	</div>
	<?php
	 
  if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];
    $password=$_POST['password'];
    if($name!=""&&$password!="")
    {
    if($name=="admin"&& $password="stephanos")
    {
    	header("Location:adminfp.html");
    }
   else
   {
     $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

  $query="select * from student where stu_email='$name' and password='$password'";
  $result=$mysqli->query($query);
  if($result->num_rows>0)
  {
  header("Location:studentfp.php");
  }
  else{ ?> <html> <script>alert("User Not Registered! Please register to LogIn...."); </script></html>  <?php }
   } 
  }
  else
  {
  	?> <html> <script>alert("Please enter the details!"); </script></html> <?php
  
  }
}
?>
	
</body>
  
  
</body>
</html>
