<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();
$a=$_POST['eid'];
$id=$_SESSION['id'];
$q=mysqli_query($con,"Insert into student_event values($id,$a)");
if(!$q)
echo "error". mysqli_error($con);
if($q)
{
    header("Location:./welcomestudent.php?id=Successfully Registered an event");
}?>