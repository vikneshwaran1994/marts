<?php

  
  if(isset($_POST['submit']))
  {
    $id=(int) $_POST['id'];
    $level=$_POST['level'];
    $fees=(int) $_POST['fees'];
    $doj=$_POST['doj'];
    
    echo $id;
    echo $level;
    echo $fees;
    echo $doj;
  
   
     $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
     $mysqli1 = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="Insert into fees values('$level',$fees,'$doj',$id)";
$result=$mysqli->query($query);

?>
<?php if($result) 
{?>
<html>
<script>
alert("Fees Updated");
window.location="adminfp.html";

</script>

<?php  } ?>
</html>
<?php

}
?>


  
