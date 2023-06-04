<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
$uid=$_POST['userid'];
$pas=$_POST['password'];
$ut=$_POST['user_type'];
$n=$_POST['name'];
$a=$_POST['age'];
$p=$_POST['phonenumber'];
$e=$_POST['emailid'];
$qry=mysqli_query($con,"Insert into log_details values ($uid,'$pas','$ut','$e',$p)");
if($ut=="Student")
$q=mysqli_query($con,"Insert into  students Values ($uid,'$n',$a,$p,'$e')");
if($ut=="Volunteer")
$q=mysqli_query($con,"Insert into  volunteer values ($uid,'$n',$a,$p,'$e')");
if($ut=="Administrator")
$q=mysqli_query($con,"Insert into  administrator values ($uid,'$n',$a,'$e',$p)");
if($qry&&$q)
{
    header("Location:./login.php?id=Successfully signed up");
}
else
  echo "error". mysqli_error($con);
?>