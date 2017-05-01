<?php

  
  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $pname=$_POST['pname'];
    $pphone=$_POST['pmobile'];
    $pemail=$_POST['pemail'];
    $dob=$_POST['dob'];
    $doj=$_POST['doj'];
    $mship=$_POST['mship'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
   // echo $address;
    //echo $mship;
    //echo $gender;
    //echo $pass;
   
     $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
     $mysqli1 = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="Insert into student(stu_dob,stu_doj,inst_number,stu_email,stu_address,stu_firstname,stu_lastname,password,gender,stu_mobile,type_of_membership) values('$dob','$doj',1,'$email','$address','$fname','$lname','$pass','$gender','$phone','$mship')";
$result=$mysqli->query($query);
$query1="Insert into parent values('$pemail',(select stu_number from student where stu_firstname='$fname'),'$pphone')";
$result1=$mysqli1->query($query1);
?>
<?php if($result) 
{?>
<html>
<script>
alert("Registration Successfull");

</script>

<?php  } header("Location:index.php"); ?>
</html>
<?php

}
?>


  
