<?php
include("connection.php");
?>

<?php
$ID=$_GET['id'];
$std=$_GET['student_name'];
$fath=$_GET['father_name'];
$cni=$_GET['cnic'];
$bir=$_GET['birthday'];
$cou=$_GET['course'];
$perm=$_GET['perm_address'];
$pre=$_GET['pre_address'];
$mob=$_GET['mobile'];
$ema=$_GET['email'];
$obt=$_GET['obt_marks'];
$tot=$_GET['tot_marks'];
$pass=$_GET['pass_year'];
$brd=$_GET['board'];
$grd=$_GET['grade'];
$lt=$_GET['last'];
$fac=$_GET['faculty'];




$query="INSERT INTO tbl_member VALUES ('$ID','$std','$fath','$cni','$bir','$cou','$perm','$pre','$mob','$ema','$obt','$tot','$pass','$brd','$grd','$lt','$fac')";
$data=mysqli_query($conn,$query);

if($data)
{  
  
   echo'<script>alert("Your Application has Been Submitted Successfully!")</script>';
}
else
{
    echo '<script>alert("Please Enter Correct and Valid Infromation!")</script>';
    
}

?>
