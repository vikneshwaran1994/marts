<?php

  
  if(isset($_POST['submit']))
  {
    $id=(int) $_POST['id'];
    $level=$_POST['level'];
    $status=$_POST['status'];
    $doc=$_POST['doj'];
    
    
  
   
     $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
     $mysqli1 = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
     $mysqli2 = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
     
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="Insert into stat values($id,'$doc','$status')";
$query1="select * from attendance where stu_number=$id";
$result=$mysqli->query($query);
$query4="insert into attendance values($id,(select count(stat) from stat where  stat='present' and stu_number=$id),(select count(doc) from stat ),(select count(stat) from stat where stat='absent' and stu_number=$id))";
$result1=$mysqli1->query($query1);
$query2="update attendance set stu_number=$id,no_of_class_attended=(select count(stat) from stat where  stat='present' and stu_number=$id),total_no_of_classes=(select count(doc) from stat ),no_of_missed_classes=(select count(doc) from stat )-(select count(stat) from stat where stat='present' and stu_number=$id) where stu_number=$id";
if($result1->num_rows>0)
{
	$result2=$mysqli2->query($query2);
}
else
{
    
     $mysqli2->query($query4);
}
?>
<?php if($result) 
{?>
<html>
<script>
alert("Attendance Updated");
window.location="adminfp.html";

</script>

<?php  } ?>
</html>
<?php

}
?>


  
