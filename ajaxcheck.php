<!-- This page contains the ajax code to which has been used by search.php.
     This page retrieves the details of the events from the database and send that information as response to search.php-->
<?php

 $v=$_GET['v'];
 
  $mysqli = new mysqli("us-cdbr-iron-east-04.cleardb.net:3306", "bf8abc5c9e0fbf", "979db442", "ad_2c293f15a27db1a");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="select * from student left outer join attendance on student.stu_number=attendance.stu_number left outer join rank on student.stu_number=rank.stu_number where stu_firstname like '$v%' or rank_name like '$v%'or stu_email like '$v%'" ;
$result=$mysqli->query($query);
echo '<table>';
echo "<th>student_id</th><th>student_email</th><th>student_firstname</th><th>rank</th><th>no_of_classes_attended</th><th>level</th>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>".$row['stu_number']."</td>";
  echo "<td>".$row['stu_email']."</td>";
  echo "<td>".$row['stu_firstname']."</td>";
  echo "<td>".$row['rank_name']."</td>";
  echo "<td>".$row['no_of_class_attended']."</td>";
  echo "<td>".$row['type_of_membership']."</td>";
  echo "</tr>";
    }
echo "</table>"; 
    
mysqli_close($mysqli);    



?>