<?php

  
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="Insert into users values('$name','$username','$email','$password','$phone')";
$result=$mysqli->query($query);
?>
<html>
<script>
alert("Registered Succesfully");

</script>
<?php header("Location:index.php"); ?>
</html>
<?php

}
?>


  
